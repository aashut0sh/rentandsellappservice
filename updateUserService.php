<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try{
include("connect.php");


$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$fullname = mysqli_real_escape_string($link, $_POST['fullname']);

//update userinfo query exectuion
$sql="update userinfo set password='$password', email='$email', phone='$phone',fullname='$fullname'  where username='$username'";


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