<?php
    include("./db.con.php");
    include("sql.php");
?>

<ul class="list-group">
    <li class="list-group-item">Admin <span class="badget p-1 badge-secondary"><?php print $mount.', 00';?></span></li>
    <li class="list-group-item">Student <span class="badget p-1 badge-warning"><?php print $mount_Student.', 000'; ?></span></li>
    <li class="list-group-item">Lecturers <span class="badget p-1 badge-primary"><?php print $mount_Lecturer.', 000'; ?></span></li>
    <li class="list-group-item">Employees <span class="badget p-1 badge-info"><?php print $mount_Employees.', 00'; ?></span></li>
</ul>