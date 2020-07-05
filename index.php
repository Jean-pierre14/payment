<?php include("./includes/nav.php"); ?>
<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php");?>
</div>
<div class="ui main">
    <!-- add dashboard ui -->
    <?php include("./includes/dash.php");?>
    <!-- and dashboard -->
</div>

<script src="./js/dist/Chart.bundle.min.js"></script>

<script>
    Chart.defaults.global.title.display = true;
    Chart.defaults.global.title.text = 'Payment System';
    Chart.defaults.globals.elements.point.radius = 10;
</script>
<script>
    let ctx = document.getElementById('myChart').getContext('2d');
    let chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'May'],
        datasets: [{
            label: 'Payment System',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 11, 5, 19, 21, 30, 45, 22, 35]
        }]
    },

    // Configuration options go here
    options: {
        title: {
            text: "Evolution of Data"
        },
        elements: {
            point: {
                radius: 5
            }
        }
    }
});
</script>
<?php include('./footer.php');?>