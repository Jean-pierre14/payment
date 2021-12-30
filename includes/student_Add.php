<?php include("./header.php"); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11 p-0 pr-2">
            <a href="studentAdd.php" class="mt-2 btn btn-sm btn-success">Add new student</a>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body my-1">
                            <form action="" method="post">
                                <input type="search" placeholder="Search..." class="my-2 form-control">
                            </form>
                        </div>

                        <div class="card card-body px-0" id="results">
                            <h3>Chargement...</h3>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <?php if(isset($_GET['getStudent'])):?>
                        <?php include_once './includes/GetStudent.php';?>
                        <?php else:?>
                        <div class="card card-body mt-2">
                            <h2>Student platform</h2>
                            <img src="./images/undraw_Domain_names_re_0uun.png" alt="" class="img-fluid">
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery-3.4.0.min.js"></script>
<script>
document.getElementById('go-back').addEventListener('click', () => {
    history.back();
});
$(document).ready(function() {
    Select()
    SelectAll()
})
</script>
<script>
function CheckDelete() {
    confirm('Do you want to delete?')
}
</script>