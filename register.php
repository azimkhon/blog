<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registration page </title>
</head>

<body> 
	<h2>Register Page</h2>

	<a href=index.php> Click here to go back </a> <br><br>

	<form action='backend/register.php' method='POST'>

	Enter Username:
	<input type='text' name='username' required='required'>
	<br><br>
	Add a photo: 
	<input type='file' name='profile_pic'>
	<br><br>
	Enter password: 
	<input type='password' name='password' required='required'>
	<br><br>
	<button type='submit' value='register'> Register </button>
	
	</form>
	
</body>

</html>

