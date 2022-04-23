<?php
    include_once "../configuration/db.con.php";

    if(isset($_POST['search'])){
        $text = mysqli_real_escape_string($con, htmlentities(trim($_POST['search'])));
        
        $sql = mysqli_query($con, "SELECT * FROM lecturer  WHERE `name` LIKE '%{$text}%' OR `sname` LIKE '%{$text}%' OR `lname` LIKE '%{$text}%' OR `email` LIKE '%{$text}%' OR sname LIKE '%{$text}%' OR `cours` LIKE '%{$text}%' OR `location` LIKE '%{$text}%' OR `nationalite` LIKE '%{$text}%' OR `adm_at` LIKE '%{$text}%' LIMIT 15");
        
        if(@mysqli_num_rows($sql) > 0){
             $output .= '
             <table class="table m-0">
                <thead>
                    <tr>
                        <th> Profil </th>
                        <th> Name </th>
                        <th> Last name </th>
                        <th> Cours </th>
                        <th> Actions </th>
                    </tr>
                </thead>
            ';
             while($row = mysqli_fetch_array($sql)){
                  $output .= '
                  <tr class="">
                    <a href="" class="">
                        <td class="">
                            <img src="./images/Lecturer/'.$row['profil'].'" alt="'.$row['name'].'" class="ui Img-Border avatart" width="30px" height="30px">
                        </td>
                        <td class="">'.$row['name'].'</td>
                        <td class="">'.$row['lname'].'</td>
                        <td class="">'.$row['cours'].'</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info" type="button" id="Edit-Lecturer"><i class="icon edit"></i></button>
                                <button class="btn btn-sm btn-success View-Lecturer" type="button" id="'.$row['unique_id'].'"><i class="icon eye"></i></button>
                                <button class="btn btn-sm btn-danger Delete-Lecturer" type="button" id="'.$row['unique_id'].'"><i class="icon trash"></i></button>
                            </div>
                        </td>
                    </a>  
                </tr>
                  ';
             }
             $output .= '</table>';
        }else{
             $output = '<p class="alert alert-danger mx-2">'.$text.' n\'est pas trouver</p>';
        }
        print $output;
   }


?>