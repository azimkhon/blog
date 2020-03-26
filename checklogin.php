
<?php

ini_set('display_errors',1);

$name = $_POST['username'];
echo $name;

$pass = $_POST['password'];
echo $pass;


$conn = new mysqli('localhost','root','root','blog');

$conn -> set_charset("utf8");

if ($conn->connect_error) {
	die('Connection failed):'.$conn->connect_error);
}

$conn ->query("INSERT INTO `users` (`username`,`password`) VALUES ('$name', '$pass')");

/*

if (($conn->query) {
	# code...
}
$conn -> close();



echo ' <pre> ' ; print_r($conn->query($sql)); echo ' </pre>' ;

echo ' <pre> ' ; print_r($conn); echo ' </pre>' ;

echo ' <pre> ' ; print_r($sql); echo ' </pre>' ;

echo ' <pre> ' ; print_r($conn->error); echo ' </pre>' ;
*/

?>
