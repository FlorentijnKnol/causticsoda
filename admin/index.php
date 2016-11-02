<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Administrative Interface</title>
	</head>
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$conn = mysqli_connect($dbhost, $dbuser);
	mysqli_select_db($conn, 'orders');
	if(isset($_SESSION['login'])){
		if($_SESSION['login'] == 1){
			echo "YESS";
		}
			else if($_SESSION['login'] == -1){
				echo '<div id="loginscreen">
			<form id="loginform" method="post" action="index.php">
			<input type="text" maxlength="11" required name="username" pattern="^[A-Za-z0-9]+$">
			<input type="text" maxlength="11" required name="password" pattern="^[A-Za-z0-9]+$">
			<button type="submit"></form></div>';
		}
			else if($_SESSION['login'] == -2){
			echo 
			'<div class="error">Fout wachtwoord</div><div id="loginscreen">
			<form id="loginform" method="post" action="index.php">
			<input type="text" maxlength="11" required name="username" pattern="^[A-Za-z0-9]+$">
			<input type="text" maxlength="11" required name="password" pattern="^[A-Za-z0-9]+$">
			<button type="submit"></form></div>';
		}
	}
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ding = mysqli_query($conn, "SELECT * FROM admins WHERE usernames = '$username' and passwords = '$password'");
		if($ding->fetch_assoc() > 0){
			$_SESSION['login'] = 1;
			include('orderstable.php');	
		}
		else{
			$_SESSION['login'] = -2;
			echo "<div class='alert'>Wrong login information</div>";
			include("login.php");
		}
	}
	else{
		$_SESSION['login'] = -1;
		include('login.php');
	}
?>	
</html>