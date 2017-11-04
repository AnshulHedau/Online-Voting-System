<?php
    $sql = "UPDATE result SET declared = 'YES' ,  winner = 'NO' where true;";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not declare results ' . mysqli_error($conn));
    }
?>