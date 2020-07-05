<?php
    include('./db.con.php');
    include('sql.php');
?>
<div class="col-lg-4">
    <div class="card">
        <div class="caption">
             <span class="badge badge-secondary p-2"><?php print $mount.', 00';?></span>
        </div>
        <img src="./images/icons/Github.png" alt="" class="img-fluid" style="width: 50%;margin: 0 auto;">
        <a href="" class="btn btn-secondary btn-block border-none">Administrators</a>
    </div>
</div>

<div class="col-lg-4">
    <div class="card">
        <div class="caption">
                <span class="badge badge-warning p-2"><?php print $mount_Student.', 000'; ?></span>
        </div>
<img src="./images/icons/Whatsapp.png" style="width: 50%;margin:0 auto" alt="" class="img-fluid">
<button class="btn btn-warning btn-block border-none">Student</button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="caption">
                        <span class="badge badge-primary p-2"><?php print $mount_Student.', 000'; ?></span>
                    </div>
                    <img src="./images/icons/Reddit.png" style="width: 50%;margin: 0 auto;" alt="" class="img-fluid">
                    <button class="btn btn-primary btn-block border-none">Lecturers</button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="caption">
                        <span class="badge badge-info p-2">25</span>
                    </div>
                    <img src="./images/icons/Vine.png" style="width: 50%;margin: 0 auto;" alt="" class="img-fluid">
                    <a href="" class="btn btn-info btn-block border-none">Employess</a>
                </div>
            </div>

            <div class="col-md-8 m-0">
                <canvas id="myChart"></canvas>
            </div>