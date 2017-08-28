<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$raw_data = $_POST;
	if (insert('staffs',$raw_data,$conn)) {
		header("Location: ../view/home.php?status=sucess");
	}
	else{
		header("Location: ../view/home.php?status=error");
	}
