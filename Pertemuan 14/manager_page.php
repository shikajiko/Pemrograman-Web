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
    <title>Manager Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="manager">
    <h1>Manager Page</h1>
  
    <p>Halo <b><?php echo $_SESSION['name']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="logout.php" class="logout-pengurus">LOGOUT</a>

    <br/>
    <br/>
  
  </body>
</html>