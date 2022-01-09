<?php
     include_once "./db.con.php";
     if(isset($_POST['searchpy'])){
          $text = mysqli_real_escape_string($con, htmlentities(trim($_POST['searchpy'])));

          
               
          $sql = mysqli_query($con, "SELECT * FROM student  WHERE username LIKE '%{$text}%' OR class LIKE '%{$text}%' OR sname LIKE '%{$text}%' OR AnneeScolaire LIKE '%{$text}%' LIMIT 15");
          
          if(@mysqli_num_rows($sql) > 0) {
               $output .= '<div class="list-group list-group-flush">';
               while($row = mysqli_fetch_array($sql)){
                    $output .= '<a href="py.php?get='.$row['unique_id'].'" id="'.$row['unique_id'].'" class="list-group-item list-group-item-action">'.$row['username'].'</a>';
               }
               $output .= '</div>';
          }else{
               $output = '<p class="alert alert-warning">'.$text.' est introuvable</p>';
          }

          
          print $output;
     }
     if(isset($_POST['search'])){
          $text = mysqli_real_escape_string($con, htmlentities(trim($_POST['search'])));
          $sql = mysqli_query($con, "SELECT * FROM student  WHERE username LIKE '%{$text}%' OR class LIKE '%{$text}%' OR sname LIKE '%{$text}%' OR AnneeScolaire LIKE '%{$text}%' LIMIT 15");
          if(@mysqli_num_rows($sql) > 0){
               $output .= '<div class="list-group list-group-flush">';
               while($row = mysqli_fetch_array($sql)){
                    $output .= '
                    <a href="student.php?getStudent='.$row['id_student'].'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                         <span>'.$row['username'].'</span>
                         <span class="badge badge-success">'.$row['class'].'</span>
                    </a>';
               }
               $output .= '</div>';
          }else{
               $output = '<p class="alert alert-danger mx-2">'.$text.' n\'est pas trouver</p>';
          }
          print $output;
     }

     if(isset($_POST['action'])){
          $Id = mysqli_real_escape_string($con, htmlentities(trim($_POST['Id'])));
          $sql = mysqli_query($con, "SELECT * FROM student WHERE id_student = $Id");

          if(!$Id){
               print '<p class="alert alert-danger">Qu\'est-ce que voulez-vous faire?</p>';
          }else{
               if(@mysqli_num_rows($sql) == 1){
               $row = mysqli_fetch_array($sql);
               if($row['profil'] == ''){
                    $imgFil = './images/animal-blur-fur-horns-207029.jpg';
               }else{
                    $imgFil = './images/Students/'.$row['profil'];
               }
               $data = '';

               $data .= '<div class="list-group list-group-flush">';
               $data .= '<p class="list-group-item">
                              <span>Prenom*: </span>
                              <span>
                                   <b>'.$row['username'].'</b>
                              </span>
                         </p>
                         <p class="list-group-item">
                              <span>Nom: </span>
                              <span>
                                   <b>'.$row['sname'].'</b>
                              </span>
                         </p>
                         <p class="list-group-item">
                              <span>E-mail de parents: </span>
                              <span>
                                   <b>'.$row['email'].'</b>
                              </span>
                         </p>
                         <p class="list-group-item">
                              <span>Genre de l\'eleve: </span>
                              <span>
                                   <b>'.$row['sex'].'</b>
                              </span>
                         </p>
                         <p class="list-group-item">
                              <span>Annee* scolaire: </span>
                              <span>
                                   <b>'.$row['AnneeScolaire'].'</b>
                              </span>
                         </p>
                         <p class="list-group-item">
                              <span>Classe: </span>
                              <span>
                                   <b>'.$row['class'].'</b>
                              </span>
                         </p>
                         ';
               $data .= '</div>';

               print '
                    <div class="card shadow-sm">
                         <div class="card-header p-2">
                              <h3 class="text-center">'.$row['username'].' '.$row['sname'].'</h3>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="img-cercle">
                                             <img src="'.$imgFil.'" alt="'.$row['username'].'" class="img-fluid">
                                        </div>
                                   </div>
                                   <div class="col-md-8 col-sm-8">
                                        '.$data.'
                                   </div>
                              </div>
                         </div>
                    </div>
               
               ';
          }else{
               print '
               <p class="alert alert-danger">Merci d\'avoir essayer :(</p>
               ';
          }
          }
          
     }

     if(isset($_POST['action4'])){
          print 'success';
     }


     if(isset($_POST['Action'])){
          $card = '';
          
          $Id = mysqli_real_escape_string($con, htmlentities(trim($_POST['Id'])));
          // $sql = mysqli_query($con, "SELECT * FROM student FULL OUTER JOIN py ON student.id_student = py.id_pay WHERE py.unique_id = $Id");
          $sql = mysqli_query($con, "SELECT mount, id_pay, bank, unique_id, created_at FROM py WHERE unique_id = $Id ");
          $sql2 = mysqli_query($con, "SELECT * FROM student WHERE unique_id = $Id");

          if(@mysqli_num_rows($sql2) == 1){
          $data = mysqli_fetch_array($sql2);
          $card = '';
          $card = '
          <div class="mb-2 card shadow-sm" id="studentCard">
               <div class="card-header p-1">
                    <h4 class="">'.$data['username'].' '.$data['sname'].'</h4>
                    <button type="button" class="reduire btn btn-sm btn-danger">Reduire</button>
               </div>
               <div class="card-body">
                    <div class="row">
                         <div class="col-md-5">
                              <div class="img-cercle">
                                   <img src="./images/Students/'.$data['profil'].'" alt="'.$data['username'].'" class="img-fluid">
                              </div>
                         </div>
                         <div class="col-md-7">
                              <p class="">
                                   <span class="">Nom: </span>
                                   <span class="">'.$data['sname'].'</span>
                              </p>
                              <p class="">
                                   <span class="">Annee* scolaire: </span>
                                   <span class="">'.$data['AnneeScolaire'].'</span>
                              </p>
                              <p class="">
                                   <span class="">Class: </span>
                                   <span class="">'.$data['class'].'</span>
                              </p>
                              <p class="">
                                   <span class="">Genre: </span>
                                   <span class="">'.$data['sex'].'</span>
                              </p>
                         </div>
                    </div>
               </div>
          </div>';
     }else{
          $output .= $card;
          $output .= '<p class="alert alert-danger">Les information que vous venez d\'entre sont incorrectes</p>';
     }    
          if(mysqli_num_rows($sql) > 0){
                $output .= $card;
                    $output .= '<table class="table">
                    <tbody>
                    ';
                    $i = 0;
                    while($row = mysqli_fetch_array($sql)){
                         
                         $output .= '
                         <tr>     
                              <td>'.$row['mount'].'</td>
                              <td>'.$row['bank'].'</td>
                              <td>'.$row['created_at'].'</td>
                              <td>
                                   <div class="btn-group">
                                        <button id="edit" type="button" class="btn btn-sm btn-info">
                                             <i class="ui icon edit"></i>
                                        </button>
                                        <button id="delete" type="button" class="btn btn-sm btn-danger">
                                             <i class="ui icon trash"></i>
                                        </button>
                                   </div>
                              </td>
                         </tr>';
                         $i += $row['mount'];
                    }
                    $output .= '
                    <tr>
                         <td><span class="badge badge-success">'.$i.'</span></td>
                         <td>montant a payer</td>
                    </tr>
                    </tbody>
                    </table>';
               
          }else{
               $output = '<p class="alert alert-warning">Cet eleve* n\'a jamais payer! :(</p>';
          }
          print $output;
     }
?>