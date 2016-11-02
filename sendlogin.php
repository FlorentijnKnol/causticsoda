<?php
/**
 * Created by PhpStorm.
 * User: maberger
 * Date: 13/10/16
 * Time: 21:24
 */
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysqli_connect($dbhost, $dbuser);
$quer = "INSERT INTO orderstable (firstnames,lastnames,phonenumbers,emails,addresses,cities,countries,postcodes,products,quantities)
		VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]',
		'$_POST[email]','$_POST[address]','$_POST[city]','$_POST[country]','$_POST[postc]','$_POST[product]','$_POST[quantity]')";
mysqli_select_db($conn, 'orders');
$retval = mysqli_query($conn,$quer );
?>