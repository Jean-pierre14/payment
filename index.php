<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Mr BISIMWA
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
    <?php include './includes/assets/_nav.php';?>
    <div class="my-5 container">
        <div class="row mt-5">
            <div class="col-md-4">
                <h4>Welcome to BISIMWA platform</h4>
                <button class="btn btn-lg btn-success">Get started</button>
            </div>
            <div class="col-md-5">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "ramall");

                    // if(@$con){
                    //     print '<h4>Welcome to the DB.io</h4>';
                    // }else{
                    //     print 'Sorry';
                    // }
                ?>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem optio ex maiores beatae deleniti
                    quis, sunt a. Aliquid sequi fugit recusandae quia? Ipsum libero aliquam eaque provident accusantium
                    pariatur, nihil voluptas sapiente repellat enim. Sequi recusandae eos quas, id earum et! Sapiente
                    provident mollitia, itaque repellendus velit nostrum incidunt aliquam veniam. Asperiores debitis
                    earum explicabo iusto natus harum amet perferendis quasi similique, soluta architecto. Reiciendis
                    iusto impedit, sit vero magni, modi optio dicta eum alias facilis nulla! Quo beatae odit molestias,
                    ipsam dolores sint earum doloribus nulla laborum repudiandae, optio exercitationem quidem magnam
                    reiciendis eos nobis dolore ullam rem saepe.
                </p>
            </div>
        </div>
    </div>
</body>
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script src="./assets/js/plugins/moment.min.js"></script>
<script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script src="./assets/demo/demo.js"></script>
<script src="./assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        blackKit.initDatePicker();
        blackKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>