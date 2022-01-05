<?php

    $output = '';
    include_once "./db.con.php";

    $sql = mysqli_query($con, "SELECT * FROM student ORDER BY username ASC");

    if(@mysqli_num_rows($sql) > 0){
        $output .= '<div class="list-group list-group-flush">';
               while($row = mysqli_fetch_array($sql)){
                    $output .= '<a href="py.php?get='.$row['unique_id'].'" id="'.$row['unique_id'].'" class="list-group-item list-group-item-action">'.$row['username'].'</a>';
               }
               $output .= '</div>';
    }else{
        $output = '<p class="alert alert-warning">Nous n\'avons pas d\'eleve* enregistre dans notre systeme</p>';
    }
    print $output;

    

?>