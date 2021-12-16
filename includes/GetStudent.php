<?php $id = $_GET['getStudent'];
                                $sql = mysqli_query($con, "SELECT * FROM student WHERE id_student = ${id}");
                                $out = '';
                                $out .= '
                                <div class="btn-group">
                                    
                                    <a href="javascript:void()" id="go-back" class="btn btn-sm btn-success my-2">Retour</a>
                                    <a href="edit.php?edit='.$id.'" class="btn btn-sm btn-warning my-2">Modifier</a>
                                    <a href="edit.php?delete='.$id.'" class="btn btn-sm btn-danger my-2">Efface</a>
                                </div>
                                ';
                                if(mysqli_num_rows($sql) > 0){
                                    $out .= '<div class="list-group">';
                                    while($row = mysqli_fetch_array($sql)){
                                        $out .= '
                                        <p class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Username:</span>
                                            <span>'.$row['username'].'</span>
                                        </p>

                                        <p class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Fullname:</span>
                                            <span>'.$row['sname'].'</span>
                                        </p>

                                        <p class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Class:</span>
                                            <span>'.$row['class'].'</span>
                                        </p>

                                        <p class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Sexe:</span>
                                            <span>'.$row['sex'].'</span>
                                        </p>

                                        <p class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Enregistre:</span>
                                            <span>'.$row['created_at'].'</span>
                                        </p>
                                        ';
                                    }
                                    $out .= '</div>';
                                }else{
                                    $out = '<p  class="alert alert-danger">:( Mal jouer</p>';
                                }
                                print $out;
                            ?>