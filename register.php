<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title> Registration page </title>

</head>
<body> 
	<h2>Register Page</h2>

	<a href=index.php> Click here to go back </a> <br/><br/>

	<form action='backend/register.php' method='POST'>

	Enter Username:
	<input type='text' name='username' required='required'/>
	<br/>
	Enter password: 
	<input type='password' name='password' required='required'/>
	<br/>
	<button type='submit' value='register'/> Register </button>
	</form>
	
</body>

</html>

