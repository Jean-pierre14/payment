<?php session_start()?>
<?php include('./header.php');?>

<?php require_once './includes/signin.php';?>

<div class="container">
    <div class="center-login">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Log In</h3>

                <?php require_once './error.php'; ?>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="user"><i class="icon user"></i>Username</label>
                        <input type="text" name="username" id="user" placeholder="Username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="pass"><i class="icon lock"></i>Password</label>
                        <input type="password" name="password" id="pass" placeholder="Password" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-success btn-block"><i
                                class="icon send"></i>Sign In</button>
                    </div>
                    <div class="small">
                        <p class="text-center">I don't an account <a href="admin.php">create an account</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>