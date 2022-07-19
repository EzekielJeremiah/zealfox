<?php 
	if (isset($_POST['submit'])) {
		$email =$_POST['email'];
		$password = $_POST['password'];
	}

	if ($email == "admin@example.com" & $password == "password") {
		header('location: dashboard.php');
	}else {
		header('location: index.php');
	}
?>