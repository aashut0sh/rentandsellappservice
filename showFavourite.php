<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include ('connect.php');

$username = mysqli_real_escape_string($link,$_POST['username']);

$sql = "select * from favouriteadpost where username=?";

$res = mysqli_query($link,$sql);

if (!$res) {
    
    echo "<p>Something went wrong:  </p>";
    
}

$num_results = mysqli_num_rows($res);

if ($num_results == 0) {
    
    echo "<p>No result found</p>";
    
}

else {
	 $data = array();
     
    while($det= mysqli_fetch_assoc($res)){
		
		$data[]=$det;
	}
}
	echo json_encode($data, JSON_PRETTY_PRINT);



?>
