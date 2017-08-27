<?php
try{
	//connect to database
include("connect.php");


	

	
$advType = mysqli_real_escape_string($link, $_POST['advType']);
$advDetails = mysqli_real_escape_string($link, $_POST['advDetails']);
$advlocationdetail = mysqli_real_escape_string($link, $_POST['advlocationdetail']);
$advlocationlong = mysqli_real_escape_string($link, $_POST['advlocationlong']);
$advlocationlat = mysqli_real_escape_string($link, $_POST['advlocationlat']);
$advprice = mysqli_real_escape_string($link, $_POST['advprice']);
$advcontact = mysqli_real_escape_string($link, $_POST['advcontact']);
$advimg = mysqli_real_escape_string($link, $_POST['advimg']);
$username = mysqli_real_escape_string($link, $_POST['username']);

//insert query execution
$sql="INSERT INTO advpost(advType,advDetails,
advlocationdetail,advlocationlong,advlocationlat,advprice,
advcontact,advimg,username) 
VALUES('$advType','$advDetails',
'$advlocationdetail',
'$advlocationlong','$advlocationlat','$advprice','$advcontact','$advimg','$username')";

//after query execution
if(mysqli_query($link, $sql)){
    
	echo "success addiong data";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}

}
catch(Exception $e)
{
	echo "Something went wrong ".$e->getMessage();
}


?>