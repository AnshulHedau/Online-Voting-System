<?php
    $name = $_SESSION['Username'];
    include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    $sql = "SELECT Voted FROM `users` where Voted='YES' and name='".$name."';";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
    if(mysqli_affected_rows($conn)>0)
    {
        $_SESSION['VOTED']="YES";
    }
    else{
        $_SESSION['VOTED']="No";
    }
?>

