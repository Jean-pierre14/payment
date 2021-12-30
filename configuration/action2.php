<?php
    include_once "./db.con.php";
    
    $thisYear = '2021-2022';
    $sql = mysqli_query($con, "SELECT * FROM student  WHERE AnneeScolaire = '$thisYear' ORDER BY id_student DESC LIMIT 12");
    if(@mysqli_num_rows($sql) > 0){
        $output .= '<div class="list-group list-group-flush">';
        while($row = mysqli_fetch_array($sql)){
            $output .= '<a href="student.php?getStudent='.$row['id_student'].'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <span>'.$row['username'].'</span>
            <span class="badge badge-success">'.$row['class'].'</span>
            </a>';
        }
        $output .= '</div>';
    }else{
        $output = '<p class="alert alert-danger">Vous n\'avez aucun eleve</p>';
    }
    print $output;
?>