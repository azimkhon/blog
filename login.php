<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<h2>Login Page</h2>
	<a href=index.php>Click here to go back<br/><br/>
	<form action=”checklogin.php” method=”POST”>
	Enter Username: 
	<input type=”text” name=”username” required=”required” />
		<br/>
	Enter password: 
	<input type=”password” name=”password” required=”required” />
		<br/>
	<button type=”submit” value=”Login”/> Sign in </button>
</body>
</html>