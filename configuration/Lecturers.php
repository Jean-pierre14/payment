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
                </tr>
            </thead>
        </table>
        <table class="table table-striped">
            <tbody>
        ';
        while($row = mysqli_fetch_array($response)){
            $output .= '
            <a href="#" class="">
                <tr class="">
                    <td class=""><img src="./images/Lecturer/'.$row['profil'].'" alt="image" class="ui ui-img avatart" width="30px" height="30px" style=""></td>
                    <td class="">'.$row['name'].'</td>
                    <td class="">'.$row['lname'].'</td>
                    <td class="">'.$row['cours'].'</td>
                    <td class="">'.$row['location'].'</td>  
                </tr>
            </a>
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