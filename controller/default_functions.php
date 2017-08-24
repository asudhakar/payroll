<?php 

	function logout(){
		session_start();
		session_destroy();   
		return true;
	}

	function create_session(){
		session_start();
		$_SESSION['admin_username'] = "SSCET";
		return true;
	}



 ?>