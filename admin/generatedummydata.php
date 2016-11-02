<html>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysqli_connect($dbhost, $dbuser);
mysqli_select_db($conn, 'orders');
for($x = 0; $x <= 10; $x++){
	mysqli_query($conn, "INSERT INTO admins (usernames, passwords) 
		VALUES ('Hallo','Doei')");	
}
?>	

</html>