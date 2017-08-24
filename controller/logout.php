<?php 
	include_once 'default_functions.php';
	if(logout()){
		header("Location: ../view/login.php");
	}