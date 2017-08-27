<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$favouriteAdID = $_GET['favouriteAdID'];

try{
	include('connect.php');
	//delete adv query
	$sql="DELETE FROM favouriteadpost WHERE advID = $favouriteAdID";

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