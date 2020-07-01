
<?php 
//commands.php

$left = $_POST["leftbutton"];
$right = $_POST["rightbutton"];
$forward = $_POST["forwardbutton"];
$backward = $_POST["backwardbutton"];
$stop = $_POST["stopbutton"];

$con = mysqli_connect("localhost", "root", "", "Control") or die("Cannot connect to the database...please try again.");

$query = "INSERT INTO `Commands`(`ID`, `L`, `R`, `Backward`, `Forward`, `Stop`) VALUES ('$ID','$left','$right','$forward', '$backward','$stop')"; 

$sql= mysqli_query($con, $query);
 
 if(! $sql)
 	echo "Cannot Proceed";

 else { 

 
 if($_POST["leftbutton"])
 
      echo "L";

 else if($_POST["rightbutton"])
     
     echo "R";
 
 else if($_POST["forwardbutton"])
 
      echo "F";
 
 else if($_POST["backwardbutton"])
    
     echo "B";
 
 else if($_POST["STOP"])
 
 	 echo "S";
 
} 



mysqli_close($con);




?>