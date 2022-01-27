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
                            $output .= '<li class="list-group-item">'.$row['username'].'</li>';
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
            <h3>Marks</h3>
        </div>
    </div>
</div>

</div>
</div>