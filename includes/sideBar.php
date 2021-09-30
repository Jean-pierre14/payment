<!-- <h3 class="text-center">Menu</h3> -->



    <!-- <div class="switch">
        <label for="switch"><i class="icon list"></i></label>
        <input type="checkbox" id="switch">
    </div> -->

    <ul class="nav nav-pills list-group">
        <li class="d-flex justify-content-between align-items-center">
            <a href="index.php">
                <i class="icon dashboard"></i>
                <label for="">Dashboard</label></a></li>
        <li class="d-flex justify-content-between align-items-center"><a href="administration.php"><i class="icon users"></i><label>Admin<span class="badge bg-light black"><?php print $mount; ?></span></label></a></li>
        <li class="d-flex justify-content-between align-items-center"><a href="student.php"><i class="icon graduation"></i><label>Students<span class="badge bg-light black"><?php print $mount_Student; ?></span></label></a></li>
        <li class="d-flex justify-content-between align-items-center"><a href="lecturer.php"><i class="icon users"></i><label for="">Lecturers<span class="badge bg-light black"><?php print $mount_Lecturer; ?></span></label></a></li>
        <!-- <li class="d-flex justify-content-between align-items-center"><a href=""><i class="icon trash"></i><label for="">Employees<span class="badge bg-light black"><?php print $mount_Employees; ?></span></label></a></li> -->
        <li class="d-flex justify-content-between align-items-center"><a href="marks.php"><i class="icon list"></i><label for="">Marks</label></a></li>
        <li class="d-flex justify-content-between align-items-center">
            <a href="py.php">
                <i class="icon list"></i>
                <label for="">Payment</label>
            </a>
        </li>
        <li class="d-flex justify-content-between align-items-center">
            <a href="adminOption.php">
                <i class="icon settings"></i>
                <label for="">Settings</label>
            </a>
        </li>
    </ul>

    <!-- <div class="mt-5 p-1">
        <button class="button labeled btn-small green ui icon m-1"><i class="icon user"></i>Admin</button>
        <button class="button labeled btn-small green ui icon m-1"><i class="icon graduation"></i>Lecturer</button>
        <button class="button labeled btn-small green ui icon m-1"><i class="icon pencil"></i>student</button>
        <button class="button labeled btn-small green ui icon m-1"><i class="icon trash"></i>Add Employee</button>
    </div> -->