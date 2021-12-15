<?php include("./header.php"); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11 p-0 pr-2">
            <a href="studentAdd.php" class="mt-2 btn btn-sm btn-success">Add new student</a>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body mt-2">
                            <form action="" method="post">
                                <input type="search" placeholder="Search..." class="my-2 form-control">
                            </form>
                            <div class="list-group">
                                <?php while($data = mysqli_fetch_array($run_student)): ?>

                                <a class="list-group-item"
                                    href="student.php?getStudent=<?php echo $data['id_student'];?>">
                                    <?php echo $data['username'];?>
                                </a>

                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <?php if(isset($_GET['getStudent'])):?>
                        <?php $id = $_GET['getStudent'];
                                $sql = mysqli_query($con, "SELECT * FROM student WHERE id_student = ${id}");
                                $out = '';
                                $out .= '<a href="student.php?edit='.$id.'" class="btn btn-sm btn-warning my-2">Edit</a>';
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
                        <?php else:?>
                        <div class="card card-body mt-2">
                            <h2>Student platform</h2>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery-3.4.0.min.js"></script>
<script>
$(document).ready(function() {
    Select()
})

function Select() {
    let action = 'select_student'
    $.ajax({
        url: './configuration/action.php',
        method: 'POST',
        dataType: 'JSON',
        data: {
            action
        },
        success: function(data) {
            if (data !== 'error') {
                alert('This no internet')
            } else {
                $('#result').innerHTML = data
            }
        }
    })
}
</script>
<script>
function CheckDelete() {
    confirm('Do you want to delete?')
}
</script>