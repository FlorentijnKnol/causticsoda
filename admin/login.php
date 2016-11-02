<div id="loginscreen">
	<form id="loginform" method="post" action="index.php">
	
		<label>Username</label>
		<input type="text" maxlength="11" required name="username" pattern="^[A-Za-z0-9]+$"><br><br>
		
		<label>Password</label>
		<input type="password" maxlength="11" required name="password" pattern="^[A-Za-z0-9]+$"><br><br>
		
		<button type="submit">Submit</button>
	</form>
</div>