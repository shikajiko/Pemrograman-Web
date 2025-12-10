<?php 
session_start();

if($_SESSION['level']==""){
	header("location:index.php?msg=failed");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Pegawai</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body class="employee">
	<h1>Employee Pegawai</h1>
 
	<p>Hello <b><?php echo $_SESSION['name']; ?></b> You are logged in as <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php" class="logout-pegawai">LOGOUT</a>
 
	<br/>
	<br/>
 
</body>
</html>