
<?php include('./header.php');?>

<?php include("./includes/nav.php");?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 col-lg-8">
                <div class="card my-3">
                    <div class="card-body">
                        <h2 class="text-center display-5">Welcome to your profil <?= $_SESSION['username'];?></h2>
                        <ul class="list-group list-group-flush my-2">
                            <li class="list-group-item py-4 list-group-item-action d-flex justify-content-between align-items-center">
                                Username:
                                <span class="badge badge-primary badge-pill">12</span>
                            </li>
                            <li class="list-group-item py-4 list-group-item-action d-flex justify-content-between align-items-center">
                                Email:
                                <span class="badge badge-primary badge-pill">12</span>
                            </li>
                            <li class="list-group-item py-4 list-group-item-action d-flex justify-content-between align-items-center">
                                Password
                                <span class="badge badge-primary badge-pill">1232</span>
                            </li>
                            <li class="list-group-item py-4 list-group-item-action d-flex justify-content-between align-items-center">
                                Bio
                                <span class="badge badge-primary badge-pill">12</span>
                            </li>
                        </ul>
                        <div class="text-center mt-3 btn-group">
                            <a href="profil.php?get=edit" class="btn btn-primary btn-sm">Edit</a>
                            <a href="profil.php?get=edit" class="btn btn-danger btn-sm">Delete Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>