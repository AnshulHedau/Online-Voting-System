<?php
    $q = $_GET['q'];
    include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            
            $sql = "SELECT * FROM users where name='$q';";//incommplete
   
            mysqli_select_db( $conn,'test_db');
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
                $IMAGE = $row['image'];
                echo "Name  : $NAME <br>";
                echo "Voter Id  : $VOTERID <br>";
                echo "Date of Birth  : $DOB <br>";
                echo "Gender  : $GENDER <br>";
                echo "Mobile Number : $MOBILE";
            }
?>