
<?php

session_start();

require_once "connect.php";

$username = $_POST['username'];

$password = $_POST['password'];

$check = $conn->query("SELECT * FROM `users` WHERE `username` = '$username'");

$result = $check->fetch_assoc();

if (count($result) == 0) {

	$conn ->query("INSERT INTO `users` (`username`,`password`) VALUES ('$username', '$password')");
	$_SESSION['reg_success'] = 'Succesfully registered';
	unset($_SESSION['name']);
	header('Location: ../index.php');
}
else {
	$_SESSION['username_alert']='This username is already taken';
	header('Location: ../register.php');
}





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
