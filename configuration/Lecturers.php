<?php //php_check_syntax()
    $output = '';
    include_once "db.con.php";

    $sql = "SELECT * FROM lecturer ORDER BY `name` ASC";
    $response = mysqli_query($con, $sql);

    if(mysqli_num_rows($response) > 0){
        $output .= '
        
        <table class="table m-0">
            <thead>
                <tr>
                    <th> Profil </th>
                    <th> Name </th>
                    <th> Last name </th>
                    <th> Cours </th>
                    <th> Location </th>
                    <th></th>
                </tr>
            </thead>
        </table>
        <table class="table table-striped">
            <tbody>
        ';
        while($row = mysqli_fetch_array($response)){
            $output .= '
            
                <tr class="">
                    <a href="" class="">
                        <td class="">
                            <img src="./images/Lecturer/'.$row['profil'].'" alt="'.$row['name'].'" class="ui Img-Border avatart" width="30px" height="30px">
                        </td>
                        <td class="">'.$row['name'].'</td>
                        <td class="">'.$row['lname'].'</td>
                        <td class="">'.$row['cours'].'</td>
                        <td class="">'.$row['location'].'</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info Edit-Lecturer" type="button" id="'.$row['unique_id'].'"><i class="icon edit"></i></button>
                                <button class="btn btn-sm btn-success Edit-Lecturer" type="button" id="'.$row['unique_id'].'"><i class="icon eye"></i></button>
                                <button class="btn btn-sm btn-danger Edit-Lecturer" type="button" id="'.$row['unique_id'].'"><i class="icon trash"></i></button>
                            </div>
                        </td>
                    </a>  
                </tr>
            ';
        }
        $output .= '
            </tbody>
        </table>
        ';
    }else{
        $output = '<p class="alert alert-danger">Il n\'y a aucun enseignant</p>';
    }
    print $output;
?>