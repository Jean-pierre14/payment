<?php include('./header.php');?>
<?php include('./includes/signup.php');?>
    <div class="container">
        <div class="center-register">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Registration</h3>
                    <form action="" method="post" name="register" autocomplete="off">

                        <?php include('./error.php');?>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username"><i class="icon user"></i>Username</label>
                                <input type="text" name="username" id="username" value="<?= $username;?>" placeholder="Username" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="sname"><i class="icon user"></i>Second name</label>
                                <input type="text" name="sname" id="sname" value='<?= $sname;?>' placeholder="Second name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="icon mail"></i>Email</label>
                            <input type="text" name="email" id="email"value='<?= $email;?>' placeholder="Email@gmail.com" class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pass_1"><i class="icon lock"></i>Password</label>
                                <input type="password" name="password_1"value='<?= $pass_1;?>' id="pass_1" placeholder="Password" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="pass_2"><i class="icon lock"></i>Confirm password</label>
                                <input type="password" name="password_2" value='<?= $pass_2;?>' id="pass_2" placeholder="Confirm Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="register" class="btn btn-success btn-block"><i class="icon send"></i>Sign Up</button>
                        </div>
                        <div class="small">
                            <p class="text-center">I don't an account <a href="login.php">Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>