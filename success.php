<?php
    session_start();
    $name = $_SESSION['Username'];
    include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    $sql = "UPDATE users SET Voted = 'YES' where name='".$name."';";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
    $votedfor = $_POST['radio-group'];
    echo "You have Voted for : ".$votedfor;
    $sql = "select novotes from result where name='".$votedfor."'";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval, MYSQL_ASSOC);
    $x = $row['novotes'];
    $sql = "UPDATE result SET novotes = ($x+1) where name='".$votedfor."';";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
?>
<script>
    alert("Sucess");
    window.location = "index.php";
</script>