<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('connect.php');



 $username=$_POST['username']; 
 $password=$_POST['password']; 
 $query = "select * from user WHERE username='$username' and  password='$password'";
 $res = mysqli_query($link,$query);
 $rows = mysqli_num_rows($res);
 
 $det = mysqli_fetch_array($link,$query);

	
	//redirect to user dashboard
	if ($rows>0) 
    {
		$_SESSION['username']=$username;
		//code here to login
		
		    }
			
    
	else 
    {
        //code if username password error
            }



?>
