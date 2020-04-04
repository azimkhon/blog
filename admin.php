<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Welcome, <?=$_SESSION['name']?> </title>

</head>

<body>

    <?php
    
    if($_SESSION['reg_success']) {
        echo '<p> ' . $_SESSION['reg_success'] . ' </p>';
    }    

    unset($_SESSION['reg_success']);
   
    ?>

    <a href=login.php> Click here to login </a>
         <br> <br>
    <a href=register.php> Click here to register </a>
</body>

</html>