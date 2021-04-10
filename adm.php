<?php include("./includes/nav.php"); ?>
<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php");?>
</div>
<div class="ui main">
    <!-- add dashboard ui -->
    <?php include("./includes/dash.php");?>
    <!-- and dashboard -->
</div>

<!-- Admin page -->
<div class="content contentAdmin" id="content">
    <div class="modalAdmin">
        <div class="ui header p-1 bg-success">
        <a href="index.php" class="exit btn red white" id="closeAdm">&Cross;</a>
            <h3 class="text-center"><i class="icon users"></i>Administrators</h3>
        </div>
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-8">

                    <div class="table-responsive">
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
                </div>

                <div class="col-md-4">
                    <?php include("./error.php"); ?>
                    <h4 class="p-2 bg-secondary text-center">
                        <?php if(isset($_GET['edit']) || isset($_GET['delete'])){
                        if($user_get == ''){
                            print 'Edit or update';
                            }else{
                                print $user_get;
                            }
                        }else{
                            print 'Edit';
                        }?>
                    </h4>
                    <form action="" method="post">
                        <div class="from-group">
                            <label for="user_name">Username</label>
                            <input type="text" name="username" id="user_name" value="<?php print $user_get;?>" placeholder="Username" class="form-control">
                        </div>

                        <div class="from-group">
                            <label for="s_name">Second name</label>
                            <input type="text" name="sname" id="s_name" value="<?php print $edit_sname;?>" placeholder="second name" class="form-control">
                        </div>

                        <div class="from-group">
                            <label for="e_mail">Email</label>
                            <input type="email" name="email" id="e_mail" value="<?php print $edit_email;?>" placeholder="Email" class="form-control">
                        </div>

                        <div class="form-group mt-1">
                            <?php if($update == true): ?>
                                <button type="submit" name="update" class="ui button labeled icon submit"><i class="icon send"></i>UPDATE</button>
                            <?php else : ?>
                                <button type="submit" disabled class="ui button labeled icon submit"><i class="icon edit"></i>Edit</button>
                            <?php endif;?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Admin page -->

<!-- include all modal pages -->


<!-- end modal pages -->
<?php include('./footer.php');?>