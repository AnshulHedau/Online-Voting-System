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
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/bg8.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" >
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>About Us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php" target="">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin_login.php" target="">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="green">
            <div class="page-header-image" data-parallax="false" style="background-image: url('./assets/img/header.jpg');">
            </div>
            <div class="container" style="overflow-y:scroll">
                    <div class="form-group" >
                        <?php echo "<h2 style='padding-top:10%;'>'Election Results'</h2><br>"; ?>
                        <div class="row" style="padding-top: 1%;">
                            <?php
                                include ('db_connect.php');
                                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                                        if(! $conn ) {
                                           die('Could not connect: ' . mysqli_error());
                                        }

                                        $sql = "SELECT * FROM `result` ORDER BY `result`.`novotes` DESC";//incommplete

                                        mysqli_select_db( $conn,'test_db');
                                        $retval =  mysqli_query( $conn , $sql);

                                        if(! $retval ) {
                                           die('Could not enter data: ' . mysqli_error($conn));
                                        }
                                        
                                        while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
                                        {
                                            $NAME = $row['name'];
                                            $IMAGE = $row['image'];
                                            $NUMBER = $row['novotes'];
                                            $WINNER = $row['winner'];
                                            ?>
                                            <div class="col-lg-3 col-md-3 col-sm-6"> 
                                                <div class="container" style="outline:1px solid white">
                                                    <div class="container">
                                                        <img src="<?php echo "$IMAGE"?>" alt="" class="img-circle" style="border-radius: 50%">
                                                        <h4>
                                                        <small>
                                                            <?php echo "$NAME"?><br>
                                                            <?php echo "<br><h6>Votes</h6>".$NUMBER?> <br>
                                                        </small>
                                                            <?php echo "<br<h6>Winner</h6>".$WINNER?> <br>
                                                    </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <?php
                                        }
                                ?>
                            
                            
                            
                            
                        </div>
                    </div>
                    <a href="index.php"><input class="btn btn-primary btn-round" type="submit" name="View" value="Go to home page" /></a>
            </div>
        </div>
        <div class="wrapper">
        </div>
        
        <footer class="footer">
            <div class="container center-copyright">
                <nav>
                    <ul>
                        <li>Current Time : </li>
                        <a href="#"><li id="demo2"></li></a>
                        
                    </ul>
                </nav>
                <script> 
                    var myVar=setInterval(function(){myTimer()},1000); 
                    function myTimer() { 
                        var d = new Date();
                        document.getElementById("demo2").innerHTML= d.toLocaleTimeString();

                        } 
                </script> 
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by
                    <a href="https://github.com/AnshulHedau" target="_blank">Anshul Hedau</a>. and
                    <a href="https://github.com/AnshulHedau" target="_blank">Sharad Jha</a>.
                </div>
            </div>
        </footer>
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
