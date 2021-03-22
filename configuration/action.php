<?php
include './db.con.php';

$output = '';

if(isset($_POST['action'])){
    if($_POST['action'] == 'allStudents'){
        $sql = mysqli_query($con, "SELECT * FROM student ORDER BY id_student DESC");
        if(@mysqli_num_rows($sql) > 0){
            $output .= '<ul lass="list-group shadow-sm">';
            while($row = mysqli_fetch_assoc($sql)){
                $output .= '
                    <li class="list-group-item list-group-item-action">
                        <a href="?student='.$row['id_student'].'">'.$row['sname'].'</a>
                    </li>
                ';
            }
            $output .= '</ul>';
        }else{
            $output .= '<p class="alert alert-warning">There is no data!</p>';
        }
        print $output;
    }
}