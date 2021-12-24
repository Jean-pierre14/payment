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
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="box p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Students</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Add new</a>
                                    <a href="#add" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                            <div>
                                <span><small>234500</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Males</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Add new</a>
                                    <a href="#add" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                            <div>
                                <span><small>234500</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Females</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Add new</a>
                                    <a href="#add" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                            <div>
                                <span><small>234500</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-2 row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Les eleves*</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Les enseignants</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row ui py-3 justify-content-center">
                <div class="col-md-3 p-3 m-1 shadow-sm">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Students: </span>
                        <span class="badge badge-success">23</span>
                    </p>
                    <div class="btn-group">
                        <a href="studentAdd.php" class="btn btn-sm btn-primary">Add new</a>
                        <a href="student.php" class="btn btn-sm btn-success">View all</a>
                    </div>
                </div>
                <div class="col-md-3 p-3 m-1 shadow-sm">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Employees: </span>
                        <span class="badge badge-success">23</span>
                    </p>
                </div>
                <div class="col-md-3 p-3 m-1 shadow-sm">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Courses: </span>
                        <span class="badge badge-success">23</span>
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi modi fugit minima ab vero
                    accusantium voluptatem minus doloribus culpa cumque dolorem consequatur eveniet delectus quos atque
                    blanditiis, porro labore maxime?
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>

<script>
const cxt = document.getElementById('myChart').getContext('2d')
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>