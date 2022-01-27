<div class="container-fluid">
    <h2 class="bg-success p-2 text-center text-white border-2">Marksheet</h2>
    <div class="row">
        <div class="col-md-3 skicky-top">
            <h3>List</h3>
            <?php
                $output = '';
                function Fetch(){
                    $output = 'Loading...';

                    global $con;
                    $sql = mysqli_query($con, "SELECT * FROM student");

                    if(@mysqli_num_rows($sql) > 0){
                        $output = '';
                        while($row = mysqli_fetch_array($sql)){
                            $output .= '<p>'.$row['username'].'</p>';
                        }
                    }else{
                        $output = '<p>There is no data</p>';
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