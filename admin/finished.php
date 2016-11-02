<html>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Administrative Interface</title>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysqli_connect($dbhost, $dbuser);
mysqli_select_db($conn, 'orders');
$ding = mysqli_query($conn, "SELECT * FROM finishedorders");
?>	
	<div class="col-md-2">
	<button class='btn btn-info' onClick="next()">Outstanding</button>
	<script>
	function next(){
		location = "index.php";
	}
	</script>
	</div>
	
	<div class="container col-md-8" style="background-color:#3399ff;padding:2%;padding-top:0%;border-radius:7px;">
		<h3><b>Finished Orders</b></h3>
		<div id="orderstable" style="overflow: scroll;height:75%;">
         <table class="table table-hover table-responsive" style="background-color:white;margin-bottom:0px;word-wrap:break-word;">
			<thead>
				<tr>
					<th>Redo</th>
					<th>Order ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Country</th>
					<th>City</th>
					<th>Address</th>
					<th>Postal/Zip Code</td>
					<th>Product</th>
					<th>Quantity</th>
					<th>E-Mail</th>
					<th>Phone Number</th>
					
				</tr>
			</thead>
            <?php
               while ($row = mysqli_fetch_array($ding)) {
                   echo "<tr>";
				   echo "<td><form method='post' action='redoorder.php'>
				   <input type='hidden' name='orderid' value=".$row['orderid'].">
				   <button type='submit' class='btn btn-info' style='background-color:red;'>
				   <span class='glyphicon glyphicon-repeat'></span></button></form></td>";
                   echo "<td>".$row['orderid']."</td>";
                   echo "<td>".$row['firstnames']."</td>";
                   echo "<td>".$row['lastnames']."</td>";
                   echo "<td>".$row['countries']."</td>";
                   echo "<td>".$row['cities']."</td>";
                   echo "<td>".$row['addresses']."</td>";
                   echo "<td>".$row['postcodes']."</td>";
                   echo "<td>".$row['products']."</td>";
                   echo "<td>".$row['quantities']."</td>";
                   echo "<td>".$row['emails']."</td>";
                   echo "<td>".$row['phonenumbers']."</td>";
                   echo "</tr>";
               }
			  
            ?>
        </table>
		</div>
	</div>
		
</html>