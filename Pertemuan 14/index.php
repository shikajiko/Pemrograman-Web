<!DOCTYPE html>
<html>
<head>
	<title>Multi User Login Level Web Using PHP and MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 
	<?php 
	if(isset($_GET['msg'])){
		if($_GET['msg']=="failed"){
			echo "<div class='alert'>Username and Password do not match!</div>";
		}
	}
	?>
 
	<div class="login-box">
		<p class="login-msg">User Management</p>
 
		<form action="authenticate.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="login-form" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="login-form" placeholder="Password" required="required">
 
			<input type="submit" class="login-btn" value="LOGIN">
 
			<br/>
			<br/>
		</form>
	</div>
 
 
</body>
</html>