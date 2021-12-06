<?php include("./header.php"); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11 p-0 pr-2">
            <a href="studentAdd.php" class="mt-2 btn btn-sm btn-success">Add new student</a>
            <div class="card card-body mt-2">
                <form action="" method="post">
                    <input type="search" placeholder="Search..." class="my-2 form-control">
                </form>
                <div id="result">
                    <!-- API json -->
                </div>
                <table class="table m-0 table-responsive-sm table-sm table-hover table-hover">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Second name </th>
                            <th> Email </th>
                            <th> Class </th>
                            <th> Department </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                </table>
                <div class="table-responsive table-responsive-sm table-size m-0 table-sm table-hover table-hover">
                    <table class="table table-striped">

                        <tbody>

                            <?php while($data = mysqli_fetch_array($run_student)): ?>
                            <tr>
                                <td>
                                    <?php print $data['username'];?>
                                </td>
                                <td>
                                    <?php print $data['sname'];?>
                                </td>
                                <td>
                                    <?php print $data['email'];?>
                                </td>
                                <td>
                                    <?php print $data['class'];?>
                                </td>
                                <td>
                                    <?php print $data['depart'];?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a title="edit <?php print $data['sname'] ;?>" class="btn btn-sm btn-primary"
                                            href="student.php?edt=<?php echo $data['id_student']; ?>"><i
                                                class="icon edit"></i></a>
                                        <a title="delete <?php print $data['sname'] ;?>" onclick="CheckDelete()"
                                            class="btn btn-sm btn-danger text-light"
                                            href="student.php?del=<?php print $data['id_student']; ?>"><i
                                                class="icon trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <div class="bg-success white p-2">
                    <tr>
                        <td style="width: 80%;">Total of student </td>
                        <td><span class="badge badge-info">
                                <?php print $mount_Student;?>
                            </span></td>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery-3.4.0.min.js"></script>
<script>
    $(document).ready(function(){
        Select()
    })

    function Select(){
        let action = 'select_student'
        $.ajax({
            url: './configuration/action.php',
            method: 'POST',
            dataType: 'JSON',
            data: {action},
            success: function(data){
                if(data !== 'error'){
                    alert('This no internet')
                }else{
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