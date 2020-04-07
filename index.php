<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c221214394.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<!-- Header block -->

    <header>
    	<div id="logo">
    		<a href="/blog" title="Main page">Personal Blog</a> 
    	</div>

    	<div id="menuhead">
    		<div>
    			<a href="about.php">About us</a>
    		</div> 
    		<div>
    			<a href="contact.php">Contact us</a>
    		</div>
    	</div>

    	<div id="regauth">
    		<a href="auth.php"> Sign in </a> | <a href="reg.php">Sign up</a>
    	</div>
    </header>

    <!-- Main blocks -->

    <div id="wrapper">

    	<div id="leftcol">
    		ss
    	</div>

    	<div id="rightcol">

    		<div class="banner">
    			<img src="img/ban1.png" alt="Ad banner">
    		</div>

    		<div class="banner">
    			<img src="img/ban2.png" alt="Ad banner">
    		</div>

    	</div>
    </div>

    <!-- Footer block -->

    <footer>
    	<div id="socials">
    		<a href="#" title="Twitter page"><i class="fab fa-twitter-square fa-2x"></i></a>
    		<a href="#" title="Facebook community"><i class="fab fa-facebook-square fa-2x"></i></a>
    	</div>
    	<div id="rights">
    		All rights are reserved &copy; <?php echo date('Y') ?>
    	</div>
    </footer>
</body>
</html>