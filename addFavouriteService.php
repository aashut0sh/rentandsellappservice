<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('connect.php');

$advID = $_GET['advID'];
$username = $_GET['username'];

$sql="INSERT INTO favouriteadpost(username,advID) values('$username','$advID')";

//after query execution
if(mysqli_query($link, $sql)){
    
	echo "success addiong data";
        
} 

else{
    
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
    
}

?>