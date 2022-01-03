<?php $get_std = false;
include("./includes/nav.php");
include("./db.con.php"); ?>
<?php
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

?>

<?php
                                $sql = "SELECT student_male.Male, student_female.Female FROM student_male INNER JOIN student_female ON student_male.id_male = student_female.id_female OR student_male.id_male != student_female.id_female";
                                $run = mysqli_query($con, $sql);

                                if(@mysqli_num_rows($run) > 0){
                                    $dataRow = mysqli_fetch_all($run);
                                    
                                    $numMale = (int)$dataRow[0][0];
                                    $numFemale = (int)$dataRow[0][1];

                                    $array = array($numMale+$numFemale, $numMale, $numFemale);
                                    // print json_encode($array);s
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
                    <div class="box bg-white p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Eleves*</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Ajouter</a>
                                    <a href="#add" class="btn btn-sm btn-success">Voir</a>
                                </div>
                            </div>
                            <div>
                                <h4><?= $numMale+$numFemale?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box bg-white p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Garcons*</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    
                                </div>
                            </div>
                            <div>
                                <h4><?= $numMale;?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box bg-white p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Filles</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    
                                </div>
                            </div>
                            <div>
                                <h4>
                                    
                                    <?= $numFemale;?>
                                    
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-2 row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        
                        <input type="hidden" value="<?= $numMale+$numFemale;?>" id="Total" class="form-control">
                        <input type="hidden" value="<?= $numMale;?>" id="numMale" class="form-control">
                        <input type="hidden" value="<?= $numFemale;?>" id="numFemale" class="form-control">
                        <div class="card-body">
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2 row justify-content-center">
                <div class="col-md-4">
                    <div class="box bg-white p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Enseignants</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Add new</a>
                                    <a href="#add" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-success"><small>234500</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box bg-white p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Enseignants</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Add new</a>
                                    <a href="#add" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-success"><small>234500</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box bg-white p-4 shadow-sm">
                        <h2> <i class="fa fa-users"></i> Enseignants</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="btn-group">
                                    <a href="#add" class="btn btn-sm btn-info">Add new</a>
                                    <a href="#add" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-success"><small>234500</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-2 bg-secondary p-2">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card card-body">
                            <h3>Chartjs</h3>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card card-body">
                            <h3>Chartjs</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>

<script>
$(document).ready(function() {
    StudentChart()
    LectuerChart()
})

function LectuerChart() {
    const ctx2 = document.getElementById('myChart2').getContext('2d')
    const myChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Hommes', 'Total', 'Femmes'],
            datasets: [
                {
                    label: '# Les enseignants',
                    data: [50, 23, 65],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            },
            {
                    label: '# Les enseignants',
                    data: [23, 33, 50],
                    backgroundColor: [
                        'rgba(0, 0, 1, .56)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, .2)',
                    'rgba(255, 206, 86, .2)'
                ],
                borderWidth: 1
            },
            ]
        },

        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

function StudentChart() {
    const Total = $('#Total').val()
    const Male = $('#numMale').val()
    const Female = $('#numFemale').val()
    const Datas = [Male, Female]
    const ctx = document.getElementById('myChart').getContext('2d')
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Garcons', 'Filles'],
            datasets: [{
                label: '# Les eleves*',
                data: Datas,
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Pie Chart'
            }
            }
        }
    });
}
</script>