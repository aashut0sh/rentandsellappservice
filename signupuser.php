<?php



try{
	//connect to database
include("connect.php");


	

$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$fullname = mysqli_real_escape_string($link, $_POST['fullname']);

//check username
$sqlselect="select username from user where username='$username'";
 $det = mysqli_query($link,$sqlselect);
    $numrows = mysqli_num_rows($det);
	if($numrows>0){
		echo "user already exists";
		}
//check email
$sqlselectemail="select email from user where email='$email'";
 $detemail = mysqli_query($link,$sqlselectemail);
    $numrowsemail = mysqli_num_rows($detemail);
	if($numrowsemail>0){
		echo "email already used";
		}
//insert query execution
$sql="INSERT INTO user(username,password,email,phone,fullname) VALUES('$username','$password','$email','$phone','$fullname')";

//after query execution
if(mysqli_query($link, $sql)){
    
	echo "success signing up";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}

}
catch(Exception $e)
{
	echo "Something went wrong ".$e->getMessage();
}


?>