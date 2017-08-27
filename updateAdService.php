<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try{
include("connect.php");

$advID = mysqli_real_escape_string($link, $_POST['advID']);
$advType = mysqli_real_escape_string($link, $_POST['advType']);
$advDetails = mysqli_real_escape_string($link, $_POST['advDetails']);
$advlocationdetail = mysqli_real_escape_string($link, $_POST['advlocationdetail']);
$advlocationlong = mysqli_real_escape_string($link, $_POST['advlocationlong']);
$advlocationlat = mysqli_real_escape_string($link, $_POST['advlocationlat']);
$advprice = mysqli_real_escape_string($link, $_POST['advprice']);
$advcontact = mysqli_real_escape_string($link, $_POST['advcontact']);
$advimg = mysqli_real_escape_string($link, $_POST['advimg']);




//update userinfo query exectuion
$sql="update userinfo set advType='$advType', advDetails='$advDetails',"
        . " advlocationdetail='$advlocationdetail', advlocationlong='$advlocationlong'"
        . ",advlocationlat='$advlocationlat', advprice='$advprice',"
        . "advcontact='$advcontact', advimg='$advimg' where advID= '$advID'";




if(mysqli_query($link, $sql)){
    
	//code to run if update succesful
    
} else{
    echo "ERROR: Could not able to execute the query. " . mysqli_error($link);
}


}

catch(Exception $e)
{
	echo "Something went wrong ".$e->getMessage();
}
?>