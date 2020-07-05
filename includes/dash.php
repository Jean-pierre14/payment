<header class="ui menu inverted small header">
    <a href="" class="item"><i class="icon dashboard active"></i> Dashboard</a>
    <a href="" class="item"><i class="icon chat"></i>Message <span class="badge badge-secondary">12</span></a>
</header>

<div class="container-fluid ui">
    <h3 class="text-center"><i class="icon dashboard"></i>Dashboard</h3>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <!-- include dasboard page -->
                <?php include('./includes/dashboard.php');?>
            </div>
        </div>
    <div class="col-md-4">
        <h3 class="text-center white p-2 bg-info">Total of Data</h3>
        <!-- include the total page -->
        <?php include('./includes/total.php');?>
    </div>
    </div>
</div>