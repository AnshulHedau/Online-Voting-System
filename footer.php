<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Online Voting</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
</head>
<body class="profile-page">
<!-- Footer -->


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
                    <a href="https://github.com/AnshulHedau" target="_blank">Anshul Hedau</a>.
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
