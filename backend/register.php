
<?php

ini_set('display_errors',1);

$username = $_POST['username'];

$password = $_POST['password'];

require "connect.php";

$conn ->query("INSERT INTO `users` (`username`,`password`) VALUES ('$username', '$password')");

$conn -> close();

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
