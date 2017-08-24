<?php 
	include_once 'default_functions.php';
	if($_REQUEST['email'] == "asudhakar@live.in" && $_REQUEST['password'] == "123456"){
		echo "I am in";
		create_session();
		header("Location: ../view/home.php");
	}else{
		echo "invalid passwo";
		header("Location: ../view/login.php?status=error");
	}
