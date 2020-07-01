
<?php 
//commands.php

$left = $_POST["leftbutton"];
$right = $_POST["rightbutton"];
$forward = $_POST["forwardbutton"];
$backward = $_POST["backwardbutton"];
$stop = $_POST["stopbutton"];

$con = mysqli_connect("localhost", "root", "", "Control") or die("Cannot connect to the database...please try again.");

$lquery = "INSERT INTO `Commands`(`ID`, `L`, `R`, `Backward`, `Forward`, `Stop`) VALUES ('','$left','','', '','')"; 
//create multiple queries
$rquery =  "INSERT INTO `Commands`(`ID`, `L`, `R`, `Backward`, `Forward`, `Stop`) VALUES ('','','$right','', '','')"; 
$bquery = "INSERT INTO `Commands`(`ID`, `L`, `R`, `Backward`, `Forward`, `Stop`) VALUES ('','','','$backward', '','')"; 
$fquery = "INSERT INTO `Commands`(`ID`, `L`, `R`, `Backward`, `Forward`, `Stop`) VALUES ('','','','', '$forward','')"; 
$squery = "INSERT INTO `Commands`(`ID`, `L`, `R`, `Backward`, `Forward`, `Stop`) VALUES ('','','','', '','$stop')"; 


//select query 

$select = "SELECT `ID`, `L`, `R`, `Backward`, `Forward`, `Stop` FROM `Commands` ORDER BY ID DESC";


$result= '';
$rSql= mysqli_query($con, $rquery);
$lSql= mysqli_query($con, $lquery);
$backSql= mysqli_query($con, $bquery);
$fSql= mysqli_query($con, $fquery);
$sSql= mysqli_query($con, $squery);

$query = mysqli_query($con, $select) or die(mysql_error());

while($row = mysqli_fetch_assoc($select)){
	foreach($row as $row)
	{ 
		print "$row /t";
	}
}

if(isset($_POST["rightbutton"]))
{ 
	$result ='R';

	
 if($rSql)
 	 echo "Data Inserted Successfully.";
 	

 else 
 	 {
 	 	echo "Cannot Proceed";
 }

 mysqli_close($con);

}

else if( isset($_POST["leftbutton"]))
{
	$result = 'L'; 

	if($lSql)
		echo "Data Inserted Successfully";
	else
		{ 
			echo "Cannot proceed";
		}
	mysqli_close($con);
}

else if(isset($_POST["forwardbutton"]))
{
	$result = 'F'; 

	if($fSql)
		echo "Data Inserted Successfully";
	else
		{ 
			echo "Cannot proceed";
		}
	mysqli_close($con);
}
else if( isset($_POST["backwardbutton"]))
{
	$result = 'B'; 

	if($backSql)
		echo "Data Inserted Successfully";
	else
		{ 
			echo "Cannot proceed";
		}
	mysqli_close($con);
}
else if( isset($_POST["stopbutton"]))
{
	$result = 'L'; 

	if($sSql)
		echo "Data Inserted Successfully";
	else
		{ 
			echo "Cannot proceed";
		}
	mysqli_close($con);
}








?>