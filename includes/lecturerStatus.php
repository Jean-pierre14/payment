<header class="ui menu inverted m-0 small header">
    <a href="" class="item"><i class="icon dashboard active"></i>Dashboard</a>
    <a href="" class="item"><i class="icon chat"></i>Message<span class="badge badge-secondary">12</span></a>
</header>

<div class="container-fluid ui">
    <h3 class="text-center"><i class="icon book"></i>Lecturers</h3>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <!-- include lecturers page -->
                <?php include('./includes/tableLecture.php');?>
            </div>
        </div>
    <div class="col-md-4">
        <h3 class="text-center white p-2 bg-info">Lecturer</h3>

        <!-- error page -->
        <?php include("./error.php"); ?>

        <!-- include the total page -->
        <form action="" method="post">
            <div class="form-group">
                <label for="name"><i class="icon user"></i>Name</label>
                <input type="text" name="name" value="<?php print $name; ?>" placeholder="Lecturer name" class="form-control" id="name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sname"><i class="icon user"></i>Second Name</label>
                    <input type="text" name="sname" value="<?php print $sname; ?>" placeholder="second name" class="form-control" id="sname">
                </div>

                
                <div class="form-group col-md-6">
                    <label for="lname"><i class="icon user"></i>Last Name</label>
                    <input type="text" name="lname" value="<?php print $lname; ?>" placeholder="Last name" class="form-control" id="lname">
                </div>

                
                <div class="form-group col-md-4">
                    <label for="cours"><i class="icon book"></i>Cours</label>
                    <input type="text" name="cours" value="<?php print $cours; ?>" placeholder="cours" class="form-control" id="cours">
                </div>

                <div class="form-group col-md-8">
                    <label for="location"><i class="icon map"></i>Location</label>
                    <input type="text" name="location" value="<?php print $location; ?>" placeholder="location" class="form-control" id="location">
                </div>

                <div class="form-group col-md-12">
                    <label for="nationalite"><i class="icon flag"></i>Nationalite</label>
                    <input type="text" name="nationalite" value="<?php print $nationalite; ?>" placeholder="nationalite" class="form-control" id="nationalite">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="lectureRegister" class="labeled button submit ui blue icon"><i class="icon save"></i>Register</button>
            </div>
        </form>
    </div>
    </div>
</div>