<?php include("./includes/nav.php"); ?>
<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php"); ?>
</div>
<div class="ui main">
    <div class="container-fluid m-0">
        <div class="row p-0">
            <div class="col-md-8">
                <h3 class="bg-success p-2 text-center text-white">Administrators and users</h3>
                <div class="card card-body">
                    <table class="table table-active table-sm table-responsive-sm table-striped">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Second Name </th>
                                <th> Email </th>
                                <th> Status </th>
                                <th> Level </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rowAdm = mysqli_fetch_assoc($admin_run)) : ?>
                                <?php $id = $rowAdm['id_admin'];
                                $user = $rowAdm['username'];
                                $full = $rowAdm['sname'];
                                $email = $rowAdm['email'];
                                $status = $rowAdm['status'];
                                $auth = $rowAdm['auth'];
                                ?>
                                <tr class="text-bold">
                                    <td><?= $user; ?></td>
                                    <td><?= $full; ?></td>
                                    <td><?= $email; ?></td>
                                    <td><?= $status; ?></td>
                                    <td><?= $auth; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="administration.php?edit=<?php print $id; ?>" class="btn btn-sm btn-info"><i class="icon edit"></i></a>
                                            <a href="administration.php?delete=<?php print $id; ?>" class="btn btn-sm btn-danger"><i class="icon trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <?php include('./includes/signup-data.php'); ?>
                <h3 class="text-center text-white bg-success p-2">Events</h3>
                <div class="card card-body">
                    <form action="" method="post" autocomplete="off">

                        <?php include('./error.php'); ?>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username"><i class="icon user"></i>Username</label>
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="sname"><i class="icon user"></i>Second name</label>
                                <input type="text" name="sname" id="sname" placeholder="Second name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="icon mail"></i>Email</label>
                            <input type="text" name="email" id="email" placeholder="Email@gmail.com" class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pass_1"><i class="icon lock"></i>Password</label>
                                <input type="password" name="password_1" id="pass_1" placeholder="Password" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="pass_2"><i class="icon lock"></i>Retype pass</label>
                                <input type="password" name="password_2" id="pass_2" placeholder="Confirm Password" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="level">Level</label>
                                <select name="level" id="level" class="form-control">
                                    <option">-- select --</option>
                                        <option value="0">Admin</option>
                                        <option value="1">Users</option>
                                        <option value="2">Super sers</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="registerAdm" class="btn btn-success btn-block"><i class="icon send"></i>Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php'); ?>