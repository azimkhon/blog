
<?php

//ini_set('display_errors',1);

$username = $_POST['username'];

$password = $_POST['password'];

require "connect.php";

$result = $conn->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

$users = $result->fetch_assoc();

//echo ' <pre> ' ; print_r($users); echo ' </pre>' ;

if( count($users) == 0)
	echo "User not found";
else 

	session_start();
	$_SESSION['user_id'] = $user['id'];	
	$_SESSION['name'] = $_POST['username'];
	echo "Authentificated successfully";
	header('Location: ../index.php');

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
