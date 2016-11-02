<html>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
$x1 = 10041241232111111111111111111111111110;
$x2 = 2003322132222224314324235;
$x3 = 400134100;
?>	
 
<div class="col-md-3 col-sm-6 col-xs-12" style="text-align:left;  white-space: nowrap;word-wrap: break-all;">
	<div class="col-md-5 col-sm-5 col-xs-5">
		<b>Text 1:</b><br><br>	
		<b>Text 2:</b><br><br>	
		<b>Text 3:</b><br>	
	</div>
	<div class="col-md-7 col-sm-7 col-xs-7">
		<?php 
			echo "€ " . $x1 . ",- <br><br>	";
			echo "€ " . $x2 . ",- <br><br>	";
			echo "€ " . $x3 . ",- <br>	";
		?>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12" style="margins:0px;">
		<hr style="border-color:black;">
	</div>
	<div class="col-md-5 col-sm-5 col-xs-5">
		<b>Total Cost:</b>
	</div>
	<div class="col-md-7 col-sm-7 col-xs-7">
		<?php 
			echo "€ " . ($x1 + $x2 + $x3) . ",-";
		?>
	</div>
</div>

</html>