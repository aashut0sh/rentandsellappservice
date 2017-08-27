
<?php
                                    include ("connect.php");
							session_start();
							if(isset($_SESSION['adminusername']))
							{
							
							echo "Welcome ".$_SESSION['adminusername'];
							}
							else
							{
								header("Location:index.php?err=4");
								}
                                                               
						
						?>
<html>
    <head>
<strong>                     
                                    
 </strong>
    <title>Admin Dashboard </title>
</head>
    <body>
        
        <p align="right>"> <a href="logout.php">Log Out </a></p>
        
    </body>
</html>