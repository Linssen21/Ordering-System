<?php 
session_start();
	 function isLoggedIn(){
		if (isset($_SESSION['user_id'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdminLoggedIn(){
		if (isset($_SESSION['admin_email'])) {
			return true;
		}else{
			return false;
		}
	}

 ?>