<?php
session_start();
$_SESSION['Username']=$_POST['user'];
$_SESSION['password']=$_POST['pass'];
$Name = $_POST['user'];
$Pass = $_POST['pass'];
$_SESSION['authuser'] =  0;

include('declared.php');
include('voted.php');
include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            
            $sql = "SELECT * FROM users where name='$Name';";//incommplete
   
            mysqli_select_db( $conn,'test_db');
            $retval =  mysqli_query( $conn , $sql);
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
    
            while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
            {
                $NAME = $row['name'];
                $PASSWORD = $row['password'];
            
            if($PASSWORD == $Pass)
            {
                $_SESSION['authuser']  = 1;
                $_SESSION['Username']=$_POST['user'];
                $_SESSION['password']=$_POST['pass'];
            }

//if(($_SESSION['Username']   == 'Anshul') and ($_SESSION['password']  ==  '15BCE2079'))
//	{$_SESSION['authuser']  = 1;}
else{
	echo '<h1>Sorry you dont have a permision to view this page!!<h1>';

  ?>
	<script>
	alert("Invalid Login Credentials");
  window.location = "login.php";
	</script>
	<?php
	exit();
}
            }
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
<body class="profile-page">
    <?php
    
    include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            
            $sql = "SELECT * FROM users where name='$Name' and password='$Pass';";//incommplete
            $retval =  mysqli_query( $conn , $sql);
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
    
            while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
            {
                $NAME = $row['name'];
                $VOTERID = $row['voterid'];
                $DOB = $row['dob'];
                $GENDER = $row['gender'];
                $MOBILE = $row['mobile'];
            }
    ?>
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
                        <?php 
                                if($_SESSION['declared']=='YES')
                                {
                            ?>
                                <a class="nav-link" href="./result_u.php">
                                    <h5><div class="pulse-btn">
                                        <span class="btn badge badge-pill badge-white"><b>RESULTS</b></span>
                                    </div></h5>
                                </a> 
                        <?php 
                                }
                                else if($_SESSION['VOTED']=='YES')
                                {
                                    ?>
                                    <a class="nav-link" href="#">
                                    <h5><div class="pulse-btn">
                                        <span class="btn badge badge-pill badge-white"><b>VOTING IN PROGRESS</b></span>
                                    </div></h5>
                                </a> 
                                <?php
                                }
                                else{
                            ?>
                                <a class="nav-link" href="./ballot.php">
                                    <h5><div class="pulse-btn">
                                        <span class="btn badge badge-pill badge-white"><b>VOTE</b></span>
                                    </div></h5>
                                </a>
                             <?php  
                                }
                                    
                            ?>

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
                            <p>Admin Section</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Modal Core -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Elections In India</h4>
              </div>
              <div class="modal-body">
                India is a Socialist, Secular, Democratic Republic and the largest democracy in the World. The modern Indian nation state came into existence on 15th of August 1947. Since then free and fair elections have been held at regular intervals as per the principles enshrined in the Constitution, Electoral Laws and System.
                <br>
                The Constitution of India has vested in the Election Commission of India the superintendence, direction and control of the entire process for conduct of elections to Parliament and Legislature of every State and to the offices of President and Vice-President of India.
                <br>
                Election Commission of India is a permanent Constitutional Body. The Election Commission was established in accordance with the Constitution on 25th January 1950. The Commission celebrated its Golden Jubilee in 2001.
                <br>
                Originally the commission had only a Chief Election Commissioner. It currently consists of Chief Election Commissioner and two Election Commissioners.<br>
                The Commission has a separate Secretariat at New Delhi, consisting of about 300 officials, in a hierarchical set up.


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info btn-simple">Save</button>
              </div>
            </div>
          </div>
    </div>
    <!-- Main Part -->
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="false" style="background-image: url('./assets/img/bg4.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">
                        <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/13932889_1069691753098751_3263082882702924223_n.jpg?oh=1d8a9c295ca2fdf05b73ee2d77ddc457&oe=5A28BA6E" alt="">
                    </div>
                    <h3 class="title"><?php echo "$NAME" ?></h3>
                    <p class="category">Eligible Voter<br><?php echo "$VOTERID" ?></p>
                    <div class="content">
                        <div class="social-description">
                            <h5><?php echo "$MOBILE" ?></h5>
                            <p>Mobile</p>
                        </div>
                        <div class="social-description">
                            <h5><?php echo "$DOB" ?></h5>
                            <p>DOB</p>
                        </div>
                        <div class="social-description">
                            <h5><?php echo "$GENDER" ?></h5>
                            <p>Gender</p>
                        </div>
                    </div>
                </div>
            </div>
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
