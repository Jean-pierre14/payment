<div class="container-fluid">
    <h2 class="bg-success p-2 text-center text-white border-2">Marksheet</h2>
    <div class="row">
        <div class="col-md-3 skicky-top">
            <div class="card card-body my-2">
                <form action="#" class="form" autocomplete="off">
                    <input type="search" name="search" id="search" placeholder="Chercher..." class="form-control">
                </form>
            </div>
            <?php
                $output = '';
                function Fetch(){
                    $output = 'Loading...';

                    global $con;
                    $sql = mysqli_query($con, "SELECT * FROM student");

                    if(@mysqli_num_rows($sql) > 0){
                        $output = '';
                        $output .= '<ul class="list-group">';
                        while($row = mysqli_fetch_array($sql)){
                            $output .= '<li class="list-group-item" id="'.$row['unique_id'].'">
                                <a href="marks.php?get='.$row['unique_id'].'" class="">'.$row['username'].'</a>
                            </li>';
                        }
                        $output .= '</ul>';

                    }else{
                        $output = '
                        <div>
                            <p class="alert alert-danger">Nous ne trouvons pas les information consernant vos eleves*</p>
                            <a href="studentAdd.php" class="btn btn-link">Ajouter un eleve*</a>
                        ';
                    }
                    return $output;
                }
                echo Fetch();
            ?>
            <!-- Ajax datas -->
        </div>
        <div class="col-md-9">
            <?php if(isset($_GET['get'])):?>
            <?php
                    function Get(){
                        global $con;
                        $id = $_GET['get'];
                        $datasGet = '';

                        $sql = mysqli_query($con, "SELECT * FROM student WHERE unique_id = $id");
                        
                        if(@mysqli_num_rows($sql) == 1){
                            $row = mysqli_fetch_array($sql);
                            $datasGet = '
                                <div class="card card-body shadow-sm my-2">
                                    <h3 class="text-center">'.$row['username'].'</h3>
                                    <table class="table table-striped">
                                        <thead class="">
                                            <tr class="">
                                                <th class="">Username</th>
                                                <th class="">Username</th>
                                                <th class="">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr class="">
                                                <td class="">data</td>
                                                <td class="">data</td>
                                                <td class="">data</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            ';
                        }else{
                            $datasGet = '
                            <div class="alert alert-danger">
                                <h3>Vous avez bien essayer mais ca ne marche pas avec nous :)</h3>
                                <a href="marks.php" class="btn btn-link">Retour</a>
                            </div>';
                        }

                        return $datasGet;
                    }
                    echo Get();
                    
                    ?>
            <?php else:?>
            <h3>Normal</h3>
            <?php endif;?>
        </div>
    </div>
</div>

</div>
</div>