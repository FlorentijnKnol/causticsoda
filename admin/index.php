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
    include('orderstable.php');
	/*if(isset($_SESSION['login'])){
        echo "HASFJHSAKJHGLASGJ";
		if($_SESSION['login'] == 1){
			include('orderstable.php');	
            exit();
		}
			else if($_SESSION['login'] == -1){
				echo '<div class="error">-1</div><div id="loginscreen"><div id="loginscreen">';
		}
			else if($_SESSION['login'] == -2){
			echo 
			'<div class="error">Fout wachtwoord</div><div id="loginscreen">';    
		}
	}
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ding = mysqli_query($conn, "SELECT * FROM admins WHERE usernames = '$username' and passwords = '$password'");
		if($ding->fetch_assoc() > 0){
			$_SESSION['login'] = 1;
			include('orderstable.php');	
            exit();
		}
		else{
			$_SESSION['login'] = -2;
			echo "<div class='alert'>Wrong login information</div>";
			include("login.php");
            exit();
		}
	}
	else{
        session_start();
		$_SESSION['login'] = -1;
		include('login.php');
        exit();
	}*/
?>	
</html>