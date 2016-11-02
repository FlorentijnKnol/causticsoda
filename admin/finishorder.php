<html>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysqli_connect($dbhost, $dbuser);
$orderid = $_POST['orderid'];
mysqli_select_db($conn, 'orders');
$ding = mysqli_query($conn, "SELECT * FROM orderstable WHERE orderid =".$orderid);
$result = $ding->fetch_assoc();
mysqli_query($conn, "INSERT INTO finishedorders 
					(orderid,firstnames,lastnames,phonenumbers,emails,addresses,
					cities,countries,postcodes,products,quantities) VALUES 
					('$result[orderid]','$result[firstnames]','$result[lastnames]',
					'$result[phonenumbers]','$result[emails]','$result[addresses]',
					'$result[cities]','$result[countries]','$result[postcodes]',
					'$result[products]','$result[quantities]')");
mysqli_query($conn, "DELETE FROM orderstable WHERE orderid =".$orderid);
header('Location: index.php');
end();
?>	

</html>