<?php 
	include_once '../model/db.php';

	$conn = db_connect();
	$raw_data = $_POST;
	if (insert('staff_details',$raw_data,$conn)) {
		print_r($raw_data);	
	}
	else{
		echo "no inserted";
	}

 ?>