<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Welcome, <?=$_SESSION['name']?> </title>

</head>

<body>
	
    <p> <?=$_SESSION['name']?> </p>
    <a href=login.php> Click here to login </a>
         <br> <br>
    <a href=register.php> Click here to register </a>
</body>

</html>