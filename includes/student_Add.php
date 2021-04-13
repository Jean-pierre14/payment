<?php include("./header.php"); ?>
<div class="container-fluid">
    <div class="bg-success white p-2 text-center">
        <h3 class="icon ui"><i class="icon graduation"></i>STUDENTS</h3>
    </div>

    <div class="row m-0 p-0">

        <div class="col-md-8 p-0 pr-2">
            <div class="card card-body mt-2">
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
                                    <td><?php print $data['username'];?></td>
                                    <td><?php print $data['sname'];?></td>
                                    <td><?php print $data['email'];?></td>
                                    <td><?php print $data['class'];?></td>
                                    <td><?php print $data['depart'];?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a title="edit <?php print $data['sname'] ;?>" class="btn btn-sm btn-primary" href="student.php?edt=<?php echo $data['id_student']; ?>"><i class="icon edit"></i></a>
                                            <a title="delete <?php print $data['sname'] ;?>" onclick="CheckDelete()" class="btn btn-sm btn-danger text-light" href="student.php?del=<?php print $data['id_student']; ?>"><i class="icon trash"></i></a>
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
                            <td><span class="badge badge-info"><?php print $mount_Student;?></span></td>
                        </tr>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-0">
            
            <h4 class="bg-success p-2 text-center text-white"><i class="icon save"></i>Register Student</h4>
            
            <div class="card card-body">
                <form autocomplete="off" action="" method="post">

                    <?php include("./error.php");?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?= $stud_username; ?>" id="username" placeholder="Username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="sname">Second name</label>
                        <input type="text" name="sname" value="<?= $stud_sname; ?>" id="sname" placeholder="Second name" class="form-control">
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-4">
                                    <label for="class">Class</label>

                                    <div class="ui" id="classess">
                                        <select name="class" value="<?= $stud_class; ?>" id="class" class="form-control" require>
                                            <option value="">-- select --</option>
                                            <option value="YEAR 1">Year 1</option>
                                            <option value="YEAR 2">Year 2</option>
                                            <option value="YEAR 3">Year 3</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="form-group col-md-8">
                                    <label for="depart">Department</label>
                                    <select name="depart" value="<?= $stud_depart; ?>" id="depart" class="form-control" require>
                                        <option value="">-- select --</option>
                                        <option value="computer science">Computer Science</option>
                                        <option value="Law">Law</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Economy">Economy</option>
                                        <option value="Accounting">Accounting</option>
                                    </select>
                                </div>
                    </div>



                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="sex">Sex</label>
                            <select name="sex" value="<?php print $stud_sex; ?>" id="sex" class="form-control" require>
                                <option value="">-- select --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group col-md-9">
                            <?php if($email_edit == true):?>
                                <label for="email">Email</label>
                                <input type="email" value="<?php print $stud_em; ?>" name="email" id="email" placeholder="Email" class="form-control" readonly>
                            <?php else: ?>
                                <label for="email">Email</label>
                                <input type="email" value="<?php print $stud_em; ?>" name="email" id="email" placeholder="Email" class="form-control"> 
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">`   
                        <?php if($update == true): ?>
                            <button type="submit" name="student_update" class="icon ui labeled button green"><i class="icon record"></i>UPDATE</button>
                        <?php else:?>
                            <button type="submit" id="register_student" name="register" class="icon ui labeled button blue"><i class="icon save"></i>Register</button>
                        <?php endif;?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function CheckDelete(){
        confirm('Do you want to delete?')
    }
</script>