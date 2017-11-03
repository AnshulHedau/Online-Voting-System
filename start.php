<?php 
     include('db_connect.php');
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }

    $sql = "UPDATE result SET declared = 'no';";
    $sql0 = "UPDATE result SET novotes = 0 ;";
    $sql1 = "UPDATE users SET VOTED = 'no';";
    $retval =  mysqli_query( $conn , $sql);
    $retval =  mysqli_query( $conn , $sql0);
    $retval =  mysqli_query( $conn , $sql1);
    if(! $retval ) {
       die('Could not display restart election: ' . mysqli_error($conn));
    }
    if(mysqli_affected_rows($conn)>0)
    {
        echo "Sucess";
    }
?>
<script>
        alert("Sucess");
        window.location = "admin_candidate.php";
        </script>
            
            