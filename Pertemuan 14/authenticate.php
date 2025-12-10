<?php 
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db_connect,
    "SELECT * FROM `user` WHERE username='$username' AND password='$password'"
);

$row_count = mysqli_num_rows($login);
 
if($row_count > 0){
	$data = mysqli_fetch_assoc($login);
	$_SESSION['name'] = $data['name'];
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin_page.php");
	}else if($data['level']=="employee"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "employee";
		header("location:employee_page.php");
 
	}else if($data['level']=="manager"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "manager";
		header("location:manager_page.php");
 
	}else{
		header("location:index.php?msg=failed");
	}	
}else{
	header("location:index.php?msg=failed");
}
 
?>