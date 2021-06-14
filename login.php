<?php 
	$db = mysqli_connect('localhost','root','','bspflutter');

	$arp_id = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM login WHERE arp_id = '".$arp_id."' AND password = '".$password."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Success");
	}else{
		echo json_encode("Error");
	}

?>
