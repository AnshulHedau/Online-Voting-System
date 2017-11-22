<?php
session_start();
if ($_SESSION['authuser'] != 1)
{echo 'sORRY  You dont have permission to view this fIlee   ';
exit();
}
else{
	$User=$_SESSION['Username'];
	$Pass=$_SESSION['password'];
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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <style>
                [type="radio"]:checked,
                [type="radio"]:not(:checked) {
                    position: absolute;
                    left: -9999px;
                }
                [type="radio"]:checked + label,
                [type="radio"]:not(:checked) + label
                {
                    position: relative;
                    padding-left: 28px;
                    cursor: pointer;
                    line-height: 20px;
                    display: inline-block;
                    color: #666;
                }
                [type="radio"]:checked + label:before,
                [type="radio"]:not(:checked) + label:before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 18px;
                    height: 18px;
                    border: 1px solid #ddd;
                    border-radius: 100%;
                    background: #fff;
                }
                [type="radio"]:checked + label:after,
                [type="radio"]:not(:checked) + label:after {
                    content: '';
                    width: 12px;
                    height: 12px;
                    background: #1DBA76;
                    position: absolute;
                    top: 4px;
                    left: 4px;
                    border-radius: 100%;
                    -webkit-transition: all 0.2s ease;
                    transition: all 0.2s ease;
                }
                [type="radio"]:not(:checked) + label:after {
                    opacity: 0;
                    -webkit-transform: scale(0);
                    transform: scale(0);
                }
                [type="radio"]:checked + label:after {
                    opacity: 1;
                    align-self: center;
                    -webkit-transform: scale(20);
                    transform: scale(20);
                }
                
            </style>
    </head>
<body class="index-page">
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
                        <a class="nav-link" href="./index.php" target="_blank">
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
        <div class="page-header clear-filter" filter-color="green">
            <div class="page-header-image" data-parallax="false" style="background-image: url('./assets/img/header.jpg');">
            
            </div>
            
            <form action="./success.php" method="post" onSubmit="result()">
                <div class="container">
                    <div class="form-group">
                        
                        <div class="row" style="padding-top: 20%;color: black;margin-top: 10px;">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="color: white"><h1>Ballot Sheet</h1></div>
                            <?php
                                include('db_connect.php');
                                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                                        if(! $conn ) {
                                           die('Could not connect: ' . mysqli_error());
                                        }


                                        $sql = "SELECT * FROM candidate;";//incommplete

                                        mysqli_select_db( $conn,'test_db');
                                        $retval =  mysqli_query( $conn , $sql);

                                        if(! $retval ) {
                                           die('Could not enter data: ' . mysqli_error($conn));
                                        }

                                        while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
                                        {
                                            $NAME = $row['name'];
                                            $IMAGE = $row['image'];
                                            $PARTY = $row['party'];
                                            $PID = $row['pid'];
                                            ?>
                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                <div class="card" >
                                                  <img class="card-img-top" src="<?php echo "$IMAGE"?>">
                                                  <div class="card-block">
                                                    <h4 class="card-signup"><?php echo "$PARTY"?></h4>
                                                    <h4 class="card-signup"><?php echo "$NAME"?></h4>
                                                    <p><input type="radio" id= "<?php echo "$NAME"?>" value="<?php echo "$NAME"?>" name="radio-group"><label for="<?php echo "$NAME"?>"></label>  </p>
                                                  </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                ?>
                            
                            
                            
                            
                            
                        </div>
                        
                            
                            
                    </div>
               
                    <input type="submit" class="btn btn-primary btn-round" name="signup_submit" value="Vote">
                </div>
            </form>        

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
<script src="./assets/js/now-ui-kit.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        nowuiKit.initSliders();
    });
    
    
    
    
    function result()
    {
       var arraywin = [document.getElementById('test1').checked,document.getElementById('test2').checked,document.getElementById('test3').checked,document.getElementById('test4').checked,document.getElementById('test5').checked,document.getElementById('test6').checked,];
        var try1 = document.getElementsByName('radio-group').value;
        alert(try1);
        alert("Yes");
        var i=0;
        for(;i<6;i++)
            {
                if(arraywin[i]==true)
                    {
                        alert("you Voted For Candidate no. "+(i+1));
                    }
            }
    }
</script>

</html>
