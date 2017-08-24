<?php 

	function landing_page_check(){
		session_start();
		if(!isset($_SESSION['admin_username']) || empty($_SESSION['admin_username'])){
			header("Location: login.php");
		}
	}

	function login_page_check(){
		session_start();
		if(isset($_SESSION['admin_username'])){
			header("Location: ../index.php");
		}
	}


 ?>