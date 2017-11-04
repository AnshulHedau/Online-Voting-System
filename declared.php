<?php
    include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    $sql = "SELECT declared FROM `result` where declared='YES';";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
    if(mysqli_affected_rows($conn)>0)
    {
        $_SESSION['declared']="YES";
    }
    else{
        $_SESSION['declared']="NO";
    }
?>