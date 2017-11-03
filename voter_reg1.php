<?php 
if(isset($_POST['signup_submit']))
{
    include('db_connect.php');
	$name = $_POST['name'];
	$voterid = $_POST['voterid'];
	$dob = $_POST['dob'];
	$mobnumber = $_POST['mobnumber'];
	$address = $_POST['address'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$uploadimage = $_POST['uploadimage'];
	$gender = $_POST['gender'];
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

					if(! $conn ) {
						 die('Could not connect: ' . mysqli_error());
					}


					$sql = "INSERT into users (`name`, `voterid`, `dob`, `mobile`, `password`, `email`, `address`, `gender`, `image`, `Voted`)values('$name','$voterid','$dob','$mobnumber','$password','$emailid','$address','$gender','$uploadimage','no');";
					$retval =  mysqli_query( $conn , $sql);
					if(! $retval ) {
						 die('Could not enter data1: ' . mysqli_error($conn));
					}
					else{
						?>
                        <script>
                            alert("Succesfully Entered");
                        </script>
                        <?php
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
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
                <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Developed by Anshul and Sharad" data-placement="bottom" target="_blank">
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
                        <a class="nav-link" href="./index.html" target="">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Home</p>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header clear-filter" filter-color="green">
                    <div class="page-header-image" data-parallax="false" style="background-image: url('./assets/img/header.jpg');">
                    </div>
                    <div class="container">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                            <div class="form-group" >
                                <div class="row" style="padding-top: 5%">

                                    <div class="col-lg-12"><h1>Voter Registration<br></h1></div>
									<div class="col-lg-2 col-md-2 col-sm-3"></div>
									
                                    <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                    
                                        <div class=" col-lg-4 col-md-5 col-sm-4" style="color: white">
											<div class="input-group form-group-no-border input-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">account_circle</i>
                                                </span>
                                                <input type="text" name="name" class="form-control" placeholder="Name...">
                                            </div>
                                            <div class="input-group form-group-no-border input-lg" >
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">lock</i>
                                                </span>   
                                                <input type="text"  name="voterid" class="form-control" placeholder="Voterid..." />
                                            </div>
                                            <div class="input-group form-group-no-border input-lg" >
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">cake</i>
                                                </span>   
                                                <input type="num"  name="dob" class="form-control" placeholder="Date of Birth..." />
                                            </div>
                                            <div class="input-group form-group-no-border input-lg" >
                                                <span class="input-group-addon form-control">
                                                    <i class="material-icons" style="color:white">cake</i>
                                                </span>   
                                                <select class="form-control" name="gender">
                                                    <option value="Male">Male
                                                    </option>
                                                    <option value="Female">Female
                                                    </option>
                                                </select>
                                            </div>
										   <div class="input-group form-group-no-border input-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">call</i>
                                                </span>
                                                <input type="num" name="mobnumber" class="form-control" placeholder="Mob.Number...">
                                            </div>
											<div class="input-group form-group-no-border input-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">add_location</i>
                                                </span>
                                                <input type="text" name="address" class="form-control" placeholder="Address">
                                            </div>
											<div class="input-group form-group-no-border input-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">email</i>
                                                </span>
                                                <input type="email" name="emailid" class="form-control" placeholder="Email-id">
                                            </div>
											<div class="input-group form-group-no-border input-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">touch_app</i>
                                                </span>
                                                <input type="password" name="password" class="form-control" placeholder="Password...">
                                            </div>
											<div class="input-group form-group-no-border input-lg" >
                                                <span class="input-group-addon">
                                                    <i class="material-icons" style="color:white">add_a_photo</i>
                                                </span>   
                                                <input type="text"  name="uploadimage" class="form-control" placeholder="Image">
                                            </div>
											
												<input type="submit" name="signup_submit" class="btn btn-primary btn-round " value="Submit" />
											
											<div class="col-lg-2 col-md-2 col-sm-1"></div>
                                        </div>
                                    
									</div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="wrapper">
                </div>
            </div>
            <div class="col-sm-12">
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
