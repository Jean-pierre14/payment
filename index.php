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
                                    <a href="studentAdd.php" class="btn btn-sm btn-info">Ajouter</a>
                                    <a href="student.php" class="btn btn-sm btn-success">Voir</a>
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
                                    <a href="studentAdd.php" class="btn btn-sm btn-info">Ajouter</a>
                                    <a href="student.php" class="btn btn-sm btn-success">Voir</a>
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
                                    <a href="studentAdd.php" class="btn btn-sm btn-info">Ajouter</a>
                                    <a href="student.php" class="btn btn-sm btn-success">Voir</a>
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
                        
                        <input type="hidden" name="Lsum" id="Lsum" class="form-control">
                        <input type="hidden" name="LsumM" id="LsumM"class="form-control">
                        <input type="hidden" name="LsumF" id="LsumF" class="form-control">

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
    
    StudentChart();
    
    LectuerChart();
    
    main();

});

function Lsum(){
    let action = 'Lsum';
    $.ajax({
        url: './actions/actions.php',
        method: 'POST',
        data: {action},
        success: function(data){
            $('#Lsum').val(data)
        }
    })
}

function LsumM(){
    let action = 'LsumM';
    $.ajax({
        url: './actions/actions.php',
        method: 'POST',
        data: {action},
        success: function(data){
            $('#LsumM').val(data)
        }
    })
}

function LsumF(){

    let action = 'LsumF';
    
    $.ajax({
        url: './actions/actions.php',
        method: 'POST',
        data: {action},
        success: function(data){
            $('#LsumF').val(data)
        }
    });

}



function main(){
    
    Lsum();

    LsumM();

    LsumF();
    

    setTimeout(() => {
        main()
    }, 300);

}

function LectuerChart() {
    
    const LM = $('#LsumM').val(),
        LF = $('#LsumF').val(),
        Datas = [LM, LF],
        ctx2 = document.getElementById('myChart2').getContext('2d'),
        myChart2 = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Hommes', 'Femmes'],
            datasets: [{
                    label: 'Les enseignants',
                    data: Datas,
                    backgroundColor: [
                        'rgba(255, 19, 132, 0.2)',
                        'rgba(52, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 16, 235, 1)'
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
    alert(LM)
}

function StudentChart() {
    const Total = $('#Total').val(),
        Male = $('#numMale').val(),
        Female = $('#numFemale').val(),
        Datas = [Male, Female],
        ctx = document.getElementById('myChart').getContext('2d'),
        myChart = new Chart(ctx, {
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