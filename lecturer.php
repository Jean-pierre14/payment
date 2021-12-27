<?php
    session_start();
    $email = '';
    include("./header.php");
    include("./includes/nav.php");
?>
<div class="side-bar ui bg-dark white" style="top:0">
    <?php include("./includes/sideBar.php");?>
</div>

<div class="ui main">
    <!-- Lecturers pages lecturerStatus -->
    <?php include("./includes/lecturerStatus.php") ?>
    <!-- End pages lecturerStatus -->
</div>


<?php include("./footer.php");?>