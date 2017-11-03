<?php
    session_start();
    session_unset();
    session_destroy();
    include('declared.php');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Online Voting</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/bootstrap.css" rel="stylesheet" />
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body class="index-page">
<!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="1">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Developed by Anshul and Sharad" data-placement="bottom" target="">
                    National Voting System
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p data-toggle="modal" data-target="#myModal">About Us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php" target="">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Voter Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin_login.php" target="">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Admin Section</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <?php include("model.php");
    ?>

    <!-- Main Part -->
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header clear-filter" filter-color="green">
                    <div class="page-header-image" data-parallax="false" style="background-image: url('./assets/img/header.jpg');">
                    </div>
                    <div class="container" style="z-index: 3">
                        <div class="content-center brand">
                            <img class="n-logo" src="./assets/img/now-logo.png" alt="">
                            <h1 class="">National Voting System</h1>
                            <h3>VOTE for a better INDIA</h3>
                            <?php 
                                if($_SESSION['declared']!='YES')
                                {
                            ?>
                                <a href="./login.php" class="btn btn-primary btn-lg btn-round" style="background-color: #1DBA76">Let's Vote</a>
                                <marquee>*NEW* Election is live, Kindly cast your Votes *NEW*</marquee>
                             <?php 
                                }
                                else{
                            ?>
                                <a href="./result_u.php" class="btn btn-primary btn-lg btn-round" style="background-color: #1DBA76">See Result</a>
                                <marquee>*NEW* Election has Ended, Result Announced *NEW*</marquee>
                             <?php  
                                }
                                    
                            ?>
                            
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
              <?php include("footer.php");
              ?>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

</script>

</html>
