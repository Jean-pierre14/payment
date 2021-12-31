<?php
     include_once "./db.con.php";
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
          if(@mysqli_num_rows($sql) == 1){
               $row = mysqli_fetch_array($sql);
               if($row['profil'] == ''){
                    $imgFil = 'animal-blur-fur-horns-207029.jpg';
               }else{
                    $imgFil = $row['profil'];
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
                    <div class="card">
                         <div class="card-header p-2">
                              <h3 class="text-center">'.$row['username'].' '.$row['sname'].'</h3>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="img-cercle">
                                             <img src="./images/'.$imgFil.'" alt="'.$row['username'].'" class="img-fluid">
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
?>