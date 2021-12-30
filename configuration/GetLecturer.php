<?php
    include_once "./db.con.php";
    $id = mysqli_real_escape_string($con, htmlentities(trim($_POST['Id'])));
    print "Get Him $Id";

?>