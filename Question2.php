

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    First Name : <input type="text" name="FN"><br><br>
    Last Name : <input type="text" name="LN"><br><br>
    Phone Extention : <input type="text" name="EX"><br><br>
    <input type="Submit" name="submit">
</form>


<?php
    include('db_connect.php');
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    if(isset($_POST['submit']))
    if(!empty($_POST['FN']) || !empty($_POST['LN']) || !empty($_POST['EX']) )
    {
        $fn = $_POST['FN'];
        $ln = $_POST['LN'];
        $ex = $_POST['EX'];
        $sql="SELECT * FROM staff where Firstname='".$fn."' or Lastname='".$ln."' or PHExt='".$ex."';";
        $result =  mysqli_query( $conn , $sql);
        if(mysqli_affected_rows($conn)>0)
        {
            echo "<table style ='border: 1px solid black;padding:20px;'><tr><th>First Name</th><th>Last Name </th><th>Extention</th></tr>";
            while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
                                            {
            
            echo   "<tr><td>".$row['Firstname']."</td>" ;
            echo   "<td>".$row['Lastname']."</td>" ;
            echo   "<td>". $row['PHExt']."</td></tr>" ;
            }
            echo "</table>";
        }
        else
        {
            echo "no staff match";
        }
    }
    else
    {
        $sql="SELECT * FROM staff";
        $result =  mysqli_query( $conn , $sql);
        echo "<table style ='border: 1px solid black;padding:20px;'><tr><th>First Name</th><th>Last Name </th><th>Extention</th></tr>";
            while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
                                            {
            
            echo   "<tr><td>".$row['Firstname']."</td>" ;
            echo   "<td>".$row['Lastname']."</td>" ;
            echo   "<td>". $row['PHExt']."</td></tr>" ;
            }
            echo "</table>";
    }
?>
