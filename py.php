<?php $get_std = false;
include("./includes/nav.php");
include("./db.con.php"); ?>
<?php
if (!isset($_SESSION['username'])) {

    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

?>

<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php"); ?>
    <?php include("./header.php"); ?>
</div>
<div class="ui main">
    <div class="container-fluid m-0 ui">
        <!-- 
        <div class="ui iu menu inverted">
            <a href="#" class="item"><i class="icon home"></i>Home</a>
            <a href="#" class="item"><i class="icon user"></i>profile</a>
            <a href="#" class="item"><i class="icon users"></i>Contacts</a>
            <a href="#" class="item"><i class="icon help"></i>Help</a>
        </div> -->

        <div class="row ui">

            <div class="col-md-4 col-sm-12 sidebar">
                <!-- <h3 class="text-center">List of student</h3> -->
                <div class="header bg-success p-2">
                    <form action="py.php" method="post" id="search" autocomplete="on">
                        <input type="text" id="search_txt" name="txt" id="txt" placeholder="Search..."
                            class="form-control">
                    </form>
                </div>
                <div class="body-student">
                    <div id="result"></div>
                    <ul id="normal-list">
                        <?php
                        $selectStudent = "SELECT * FROM student ORDER BY id_student DESC";
                        $run = mysqli_query($con, $selectStudent);
                        while ($row = mysqli_fetch_array($run)) {
                            $stud_name = $row['username'];
                            $stud_sname = $row['sname'];
                            $stud_id = $row['id_student'];
                            $stud_email = $row['email'];
                        ?>
                        <?php if ($get_std == true) : ?>
                        <li title="Student <?php print $stud_name . ' ' . $stud_sname . ' ni  ' . $row['class']; ?>"><a
                                href="py.php?student=<?php print $stud_id; ?>"><?php print $stud_name . ' ' . $stud_sname; ?></a>
                        </li>
                        <?php else : ?>
                        <li title="Student <?php print $stud_name . ' ' . $stud_sname . ' ni  ' . $row['class']; ?>"><a
                                href="py.php?student=<?php print $stud_id; ?>"><?php print $stud_name . ' ' . $stud_sname; ?></a>
                        </li>
                        <?php endif; ?>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 bg-light">
                <?php
                if (isset($_GET['student'])) {
                    $id = $_GET['student'];
                    $get_std = true;
                    $get_student = "SELECT * FROM student WHERE id_student = '$id'";
                    $run = mysqli_query($con, $get_student);
                    $d = mysqli_fetch_array($run);
                    $get_user = $d['username'];
                    $get_sname = $d['sname'];
                    $get_depart = $d['depart'];
                    $get_em = $d['email'];
                    $get_creat_at = $d['create_at'];
                    $get_class = $d['class'];
                    $get_sex = $d['sex'];
                ?>
                <div class="header ui bg-success p-3 m-0 container-fluid">
                    <h3 class="white"><?php print $get_user . ' ' . $get_sname; ?></h3>
                </div>
                <div class="row">
                    <div class="col-md-8 m-0 col-sm-12">
                        <div class="table-height">
                            <div class="table-responsive">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr>
                                            <th> Mount payed </th>
                                            <th> Date </th>
                                            <th> bank </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                </table>

                                <table class="table striped ui m-0">
                                    <?php
                                        $selet_get = "SELECT * FROM py WHERE id_pay = '$id'";
                                        $run_slt_get = mysqli_query($con, $selet_get);
                                        ?>
                                    <tbody>
                                        <?php while ($row_pay = mysqli_fetch_array($run_slt_get)) {
                                            ?>
                                        <tr>
                                            <td><?php print $row_pay['mount']; ?></td>
                                            <td><?php print $row_pay['create_at']; ?></td>
                                            <td><?php print $row_pay['bank']; ?></td>
                                        </tr>
                                        <?php
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="bg-secondary p-2 ui">

                            <?php
                                $select_mount = "SELECT SUM(mount) AS mountSum FROM py WHERE id_pay = '$id'";
                                $run_slt = mysqli_query($con, $select_mount);
                                $row = mysqli_fetch_array($run_slt);
                                $total = $row['mountSum'];
                                ?>

                            <table class="table ui">
                                <thead>
                                    <tr>
                                        <th class="ui blue"><?php print $total; ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card m-1 p-1 bg-success white margin-0">
                            <p>class : <?php print $get_class; ?></p>
                            <p>Department: <span><?php print $get_depart; ?></span></p>
                            <p>Gender: <span><?php print $get_sex; ?></span></p>
                            <p>Register at: <small><?php print $get_creat_at; ?></small></p>
                        </div>
                        <hr>

                        <?php if (count($error) > 0) : ?>
                        <?php foreach ($error as $errors) : ?>
                        <div class="alert alert-danger">
                            <p> <?php echo $errors; ?> </p>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>

                        <?php
                            if (isset($_POST['py'])) {

                                $mount_pay = mysqli_real_escape_string($con, $_POST['mount']);
                                $bank = mysqli_real_escape_string($con, $_POST['bank']);

                                if (empty($mount_pay)) {
                                    array_push($error, "The mount field is empty");
                                }
                                if (empty($bank)) {
                                    array_push($error, "The Bank field is empty");
                                }

                                if (count($error) == 0) {
                                    $py = "INSERT INTO py(mount, create_at,id_pay, bank) VALUES('$mount_pay',now(),'$id', '$bank')";
                                    $run = mysqli_query($con, $py);
                            ?><script>
                        alert('hello');
                        </script><?php
                                            }
                                        }
                                                ?>
                        <form action="" method="post">
                            <?php
                                $mount = '';
                                if (isset($_POST['py_stud'])) {

                                    // $py = $std_name .''. $std_sname;
                                    $id = $_GET['student'];
                                    $mount = $_POST['mount'];
                                    $bank = $_POST['bank'];
                                    // $date = $_POST['date'];

                                    if (empty($mount)) {
                                        array_push($error, "The mount field is empty :(");
                                    }
                                    if (empty($bank)) {
                                        array_push($error, "The bank selection is empty :(");
                                    }
                                    // if(empty($date)){array_push($error, "The date field is empty :(");}

                                    if (count($error) == 0) {
                                        $py = "INSERT INTO py(mount, create_at,id_pay, bank) VALUES('$mount',now(),'$id', '$bank')";
                                        $run = mysqli_query($con, $py);

                                        $mount = '';
                                        $bank = '';
                                    }
                                }
                                ?>
                            <?php include("./error.php"); ?>
                            <div class="ui form-group">
                                <label for="mount"><i class="icon blue money"></i>Mount pay</label>
                                <input type="number" name="mount" value="<?php print $mount; ?>" id="mount"
                                    placeholder="Mount payed" class="form-control">
                            </div>

                            <div class="form-group ui">
                                <label for="bank"><i class="icon home red"></i>Bank</label>
                                <select name="bank" id="bank" class="form-control ui select">
                                    <option value="">-- select --</option>
                                    <option value="Bank of kigali">Bank of kigali</option>
                                    <option value="Unguka bank">Unguka bank</option>
                                </select>
                            </div>
                            <div class="form-group mt-1">
                                <button type="submit" id="pay" name="py_stud"
                                    class="ui labeled button icon submit red"><i class="icon refresh"></i>Pay
                                    now!!</button>
                            </div>
                    </div>



                    </form>
                </div>

                <div class="col-lg-12 m-0 mt-1">
                    <div class="header white bg-success p-2">
                        <h3 class="text-center ui" title="ULK the best private university in Rwanda"
                            style="cursor: pointer">ULK UNIVERSITE LIBRE DE KIGALI</h3>
                        <p class="text-center" title="ULK the best private university in Rwanda"
                            style="cursor: pointer">&copy; <?php print date("Y"); ?> copyright</p>
                    </div>
                </div>
            </div>
            <?php
                } else {
        ?>
            <div class="header bg-success p-2">
                <h3 class="text-center">Choose a student</h3>
            </div>
            <div class="container-fluid m-0 p-0">
                <div class="row">
                    <div class="col-md-6 col-xl-3 mt-1 text-center">
                        <h3 class="text-center">The best</h3>
                        <a href="./images/ulk.jpg" data-lightbox="mygallery"><img src="./images/ulk.png" alt=""
                                class="img-fluid"></a>
                        <p>University in Rwanda</p>
                    </div>

                    <div class="col-md-6 col-xl-3 mt-1 text-center">
                        <h3 class="text-center">Registration</h3>
                        <a href="./images/registration.jpg" data-lightbox="mygallery"><img
                                src="./images/registration.png" alt="" class="img-fluid"></a>
                        <p>Fast and serieuse</p>
                    </div>

                    <div class="col-md-6 col-xl-3 mt-1 text-center">
                        <h3 class="text-center">Christans</h3>
                        <a href="./images/christian.jpg" data-lightbox="mygallery"><img src="./images/christian.png"
                                alt="" class="img-fluid"></a>
                        <p>Put God first</p>
                    </div>

                    <div class="col-md-6 col-xl-3 mt-1 text-center">
                        <h3 class="text-center">Police</h3>
                        <a href="./images/police.png" data-lightbox="mygallery"><img src="./images/police.png" alt=""
                                class="img-fluid"></a>
                        <p>We are looking to you</p>
                    </div>

                    <div class="col-md-12 col-xl-12 mt-1 text-center">
                        <h3 class="text-center">Payment system</h3>
                        <a href="./images/payment.jpg" data-lightbox="mygallery"><img
                                src="./images/paymentAnimation.gif" alt="" class="img-fluid"></a>
                        <p>We are looking to you</p>
                        <div class="col-md-12 bg-sucess p-2">
                            <h3 class="text-center white">KIGALI INDEPENDENT UNIVERSITY</h3>
                            <p class="text-center ui white m-0 p-0">&copy; <?php print date("Y"); ?> copyright</p>
                        </div>
                    </div>


                </div>
            </div>
            <?php
                }
        ?>
        </div>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>