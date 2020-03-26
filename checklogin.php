<?php

$name = $_POST['username'];
echo $username;

$pass = $_POST['password'];
echo $pass;

$user = 'root';
$password = 'root';
$db = 'blog';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$mysql = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

$mysql -> query("INSERT INTO 'users' ('username','password') VALUES ('$name', '$pass')");
$mysql -> close();





?>
