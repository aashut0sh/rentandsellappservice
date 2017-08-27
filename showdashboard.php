<?php
include ('connect.php');

//$username = mysqli_real_escape_string($link,$_POST['username']);

$sql = "select * from advpost";

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