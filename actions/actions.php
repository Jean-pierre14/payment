<?php
    require_once '../configuration/db.con.php';

    $ouput = '';
    if(isset($_POST['EventL'])){
        if($_POST['EventL'] == 'viewLecturer'){
            $id = mysqli_real_escape_string($con, trim(htmlentities($_POST['Id'])));

            $sql = mysqli_query($con, "SELECT * FROM lecturer WHERE unique_id = $id");

            if(@mysqli_num_rows($sql) > 0){
                
                $row = mysqli_fetch_array($sql);

                $ouput .= '
                <div class="modal-header">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>'.$row['name'].' '.$row['sname'].'</span>
                        <span>
                            <img src="./images/Lecturer/'.$row['profil'].'" class="ui img-avatar img-border" width="30px" height="30px"/>
                        </span>
                    </p>
                </div>
                ';
                $ouput .= '
                <div class="modal-body">
                    <h2>Les informations de <small>'.$row['name'].'</small></h2>
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Email: </span>
                        <span>
                            '.$row['email'].'
                        </span>
                    </p>
                </div>
                ';
                $ouput .= '
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm CloseEvent" type="button">Ferme</button>
                </div>
                ';

            }else{
                $ouput = '<p class="m-3 alert alert-danger">L\'enseignant que vous avez clique* dessous n\'est plus dans le systeme</p>';
            }

            print $ouput;
        }
    }

?>