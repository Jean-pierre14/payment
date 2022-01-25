<div class="container-fluid ui">
    <h3 class="text-center">
        <i class="icon book"></i>
        Enseignants
    </h3>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <!-- include lecturers page -->
                <?php include('./includes/tableLecture.php');?>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-center white p-2 bg-success">Enseignants</h3>
            <!-- error page -->
            <?php include("./error.php"); ?>
            <!-- include the total page -->
            <form action="" method="post" id="lecturerForm" enctype="multipart/form-data">
                <div id="error"></div>
                <div class="form-group">
                    <label for="name"><i class="icon user"></i>Name</label>
                    <input type="text" name="name" value="<?php print $name; ?>" placeholder="Lecturer name"
                        class="form-control" id="name">
                    <input type="hidden" name="action" value="LecturerForm" id="action" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="sname"><i class="icon user"></i>Second Name</label>
                        <input type="text" name="sname" value="<?php print $sname; ?>" placeholder="second name"
                            class="form-control" id="sname">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="lname"><i class="icon user"></i>Last Name</label>
                        <input type="text" name="lname" value="<?php print $lname; ?>" placeholder="Last name"
                            class="form-control" id="lname">
                    </div>


                    <div class="form-group col-md-4">
                        <label for="cours"><i class="icon book"></i>Cours</label>
                        <input type="text" name="cours" value="<?php print $cours; ?>" placeholder="cours"
                            class="form-control" id="cours">
                    </div>

                    <div class="form-group col-md-8">
                        <label for="location"><i class="icon map"></i>Location</label>
                        <input type="text" name="location" value="<?php print $location; ?>" placeholder="location"
                            class="form-control" id="location">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="email"><i class="icon map"></i>Email</label>
                        <input required type="email" name="email" placeholder="Email<?php print $email;?>"
                            class="form-control" id="location">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="nationalite"><i class="icon flag"></i>Nationalite</label>
                        <input type="text" name="nationalite" value="<?php print $nationalite; ?>"
                            placeholder="nationalite" class="form-control" id="nationalite">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="file"><i class="icon photo"></i>Photo de Profil</label>
                        <input type="file" name="file" class="form-control" id="file">
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" id="lectureRegister" class="labeled button submit ui blue icon"><i
                            class="icon save"></i>Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./js/jquery-3.4.0.min.js"></script>

<script>
$(document).ready(function() {
    // $('#lectureRegister').click(function() {
    //     alert("Hello")
    // })
})
</script>