<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$advID = $_GET['advID'];

try{
	include('connect.php');
	//delete adv query
	$sql="DELETE FROM advpost WHERE advID = $advID";

if(mysqli_query($link, $sql)){
    
	// after the ad is deleted
    
    
}
else{
    
    echo "Error"."<br>"."ERROR: Could not able to execute query. " . mysqli_error($link);
    
}
}

catch(Exception $e)
{
	echo "Something went wrong ".$e->getMessage();
}

?>