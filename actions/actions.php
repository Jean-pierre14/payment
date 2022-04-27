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

    if(isset($_POST['action'])){
        if($_POST['action'] == 'Edit-Lecturer'){
            sleep(2);

            $id = mysqli_real_escape_string($con, trim(htmlentities($_POST['Id'])));

            $sql = mysqli_query($con, "SELECT * FROM lecturer WHERE unique_id = $id");

            if(@mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_array($sql);

                $ouput = '
                <p class="bg-success border-2 alert d-flex justify-content-between align-items-center">
                        <span>'.$row['name'].' '.$row['sname'].'</span>
                        <span>
                            <img src="./images/Lecturer/'.$row['profil'].'" class="ui img-avatar img-border" width="30px" height="30px"/>
                        </span>
                </p>
                <div class="card shadow-sm my-2">
                    <div class="card-body">
                    <form action="" method="post" id="lecturerForm" enctype="multipart/form-data">
                    <div id="error"></div>
                    <div class="form-group">
                        <label for="name"><i class="icon user"></i>Name</label>
                        <input type="text" name="name" value="'.$row['name'].'" placeholder="Lecturer name"
                            class="form-control" id="name">
                        <input type="hidden" name="action" value="LecturerForm" id="action" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sname"><i class="icon user"></i>Second Name</label>
                            <input type="text" name="sname" value="'.$row['sname'].'" placeholder="second name"
                                class="form-control" id="sname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname"><i class="icon user"></i>Last Name</label>
                            <input type="text" name="lname" value="'.$row['lname'].'" placeholder="Last name"
                                class="form-control" id="lname">
                        </div>


                        <div class="form-group col-md-4">
                            <label for="cours"><i class="icon book"></i>Cours</label>
                            <input type="text" name="cours" value="'.$row['cours'].'" placeholder="cours"
                                class="form-control" id="cours">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="location"><i class="icon map"></i>Location</label>
                            <input type="text" name="location" value="'.$row['location'].'" placeholder="location"
                                class="form-control" id="location">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="email"><i class="icon map"></i>Email</label>
                            <input required type="email" name="email" value="'.$row['email'].'" placeholder="Email'.$row['email'].'"
                                class="form-control" id="location">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="nationalite"><i class="icon flag"></i>Nationalite</label>
                            <input type="text" name="nationalite" value="'.$row['nationalite'].'"
                                placeholder="nationalite" class="form-control" id="nationalite">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="file"><i class="icon photo"></i>Photo de Profil</label>
                            <input type="file" name="file" class="form-control" id="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" id="upL" class="labeled button submit ui yellow icon"><i
                                class="icon save"></i>Mettre a jour</button>
                    </div>
                </form>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-sm Back">Ajouter</button>
                ';
            }else{
                $ouput = '<p class="alert alert-danger">Vous avez essayer quand meme:)</p>';
            }
            print $ouput;
        }
    }

?>