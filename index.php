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
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip"
                    title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                    <span>Mr•</span> BISIMWA System
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a>
                                Mr BISIMWA
                            </a>
                        </div>
                        <div class="col-6 collapse-close text-right">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item p-0">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom"
                            href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fab fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom"
                            href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                            href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="https://demos.creative-tim.com/blk-design-system/docs/1.0/getting-started/overview.html"
                                class="dropdown-item">
                                <i class="tim-icons icon-paper"></i> Documentation
                            </a>
                            <a href="examples/register-page.html" class="dropdown-item">
                                <i class="tim-icons icon-bullet-list-67"></i>Register Page
                            </a>
                            <a href="examples/landing-page.html" class="dropdown-item">
                                <i class="tim-icons icon-image-02"></i>View data
                            </a>
                            <a href="examples/profile-page.html" class="dropdown-item">
                                <i class="tim-icons icon-single-02"></i>Profile Page
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)"
                            onclick="scrollToDownload()">
                            <i class="tim-icons icon-cloud-download-93"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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