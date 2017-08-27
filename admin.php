<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include ('connect.php');

 session_start();

 $adminusername=$_POST['adminusername'];
 $adminpassword=$_POST['adminpassword']; 
 
 $query = "select * from administrator WHERE username='$adminusername' and  password='$adminpassword'";
 $res = mysqli_query($link,$query);
 $rows = mysqli_num_rows($res);
 


	
	//redirect to user dashboard
	if ($rows>0) 
    {
		$_SESSION['adminusername']=$adminusername;
		header("Location: admindashboard.php");
		
		    }
			
    
	else 
    {
        //code if username password error
            header("Location: index.php?err=1");
            }



