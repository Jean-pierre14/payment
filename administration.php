<?php include("./includes/nav.php"); ?>
<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php");?>
</div>
<div class="ui main">
    <div class="container-fluid p-0">
        <div class="row p-0">
            <div class="col-md-9">
                <h3 class="bg-success p-2 text-center text-white">Administrators and users</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Second Name </th>
                            <th> Email </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($rowAdm = mysqli_fetch_assoc($admin_run)):?>
                            <?php $id = $rowAdm['id_admin'];$user = $rowAdm['username'];$full = $rowAdm['sname'];$email = $rowAdm['email'];?>
                            <tr>
                                <td><?php print $user; ?></td>
                                <td><?php print $full; ?></td>
                                <td><?php print $email; ?></td>
                                <td>
                                    <a href="adm.php?edit=<?php print $id;?>"><i class="icon edit"></i></a>
                                    <a href="adm.php?delete=<?php print $id;?>"><i class="icon trash"></i></a>
                                </td>
                            </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <?php include('./includes/signup-data.php');?>
                <h3 class="text-center text-white bg-success p-2">Events</h3>
                <form action="" method="post" name="register" autocomplete="off">

                        <?php include('./error.php');?>

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
                        </div>

                        <div class="form-group">
                            <button type="submit" name="register" class="btn btn-success btn-block"><i class="icon send"></i>Sign Up</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php');?>