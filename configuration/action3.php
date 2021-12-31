<?php
     include_once "./db.con.php";
     if(isset($_POST['search'])){
          $text = mysqli_real_escape_string($con, htmlentities(trim($_POST['search'])));
          $sql = mysqli_query($con, "SELECT * FROM student  WHERE username LIKE '%{$text}%' LIMIT 15");
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
?>