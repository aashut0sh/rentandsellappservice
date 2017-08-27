<html>
    <head><title> Administrator </title></head>
    <body>
        <p align='center'> <font color="#FF0000" size="40px">Attention! If you're not an administrator, Please Back Off Right now. </font></p>
        <p align='center'> 
            
        <form action="admin.php" method="POST">
            <div>
        <table  style="width:10%" id="form" align="center">
  <tr>
<td>Username:</td>
<td> <input type=username name="adminusername"> </td>
</tr>
<tr>
<td>Password: </td>
<td><input type=password name="adminpassword"></td> 
</tr>
<tr>
<td><font color="#FFFFFF" ><a href="help.php"> Need Help?</a> </font></td>
<td><button type=submit Value="Log In"  accesskey="l">Log in</button><br></td>
</tr>
</table>
            </div>
</form>
        
</p>
<p align="center">
<?php
        if(isset($_SESSION['username'])){
		
			header("Location: dashboard.php?msg=1");
		}
		
	elseif(isset($_SESSION['adminusername']))
	{
		header("Location: admindashboard.php?msg=1");
			
		}	
	elseif(isset($_GET['err'])){
        if($_GET['err']==1)
 				{
					echo "Invalid username or password. Please try again!"."<br>";	
				}
				
				elseif($_GET['err']==4)
{
	echo "Please Login to enter the website";
	
	}

				else
				{
				echo "";
				}
				
}
	
else{
	echo "";
	}
        ?>
</p>
</body>
</html>
