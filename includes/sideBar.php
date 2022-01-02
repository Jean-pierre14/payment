<!-- <h3 class="text-center">Menu</h3> -->



    <!-- <div class="switch">
        <label for="switch"><i class="icon list"></i></label>
        <input type="checkbox" id="switch">
    </div> -->

    <ul class="nav nav-pills list-group">
        <li class="d-flex justify-content-between align-items-center">
            <a href="index.php">
                <i class="icon dashboard"></i>
                <label for="">Tableau de bord</label></a></li>
        <li class="d-flex justify-content-between align-items-center">
            <a href="administration.php">
                <i class="icon users"></i>
                <label>Administrateurs
                    <span class="badge bg-light black">
                        <?php print $mount; ?>
                    </span>
                </label>
            </a>
        </li>
        <li class="d-flex justify-content-between align-items-center">
            <a href="student.php">
                <i class="icon graduation"></i>
                <label>Eleves*
                    <span class="badge bg-light black">
                        <?php print $mount_Student; ?>
                    </span>
                </label>
            </a>
        </li>
        <li class="d-flex justify-content-between align-items-center">
            <a href="lecturer.php">
                <i class="icon users"></i>
                <label for="">
                Enseignants
                <span class="badge bg-light black">
                    <?php print $mount_Lecturer; ?>
                </span>
            </label>
        </a>
    </li>
    <li class="d-flex justify-content-between align-items-center">
        <a href="marks.php">
            <i class="icon list"></i>
            <label for="">Cotations</label>
        </a>
    </li>
    <li class="d-flex justify-content-between align-items-center">
        <a href="py.php">
            <i class="icon list"></i>
            <label for="">Payement</label>
        </a>
    </li>
    <li class="d-flex justify-content-between align-items-center">
        <a href="adminOption.php">
            <i class="icon settings"></i>
            <label for="">Paramettres</label>
        </a>
    </li>
    </ul>