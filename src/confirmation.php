<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php 
//Start a session, maintain it - until user selects LOGOUT
session_start(); 
?>
<html>
<head>
	<title>Confirmation - CS25010</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>

<div id="header">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="phones.php">Phones</a></li>
		<li><a href="shoppingbasket.php">Shopping Basket</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>

<div id="banner">
	<div class="h1">
		Confirmation
	</div>
	<div class="h2">
		CS25010 Web Programming
	</div>
</div>

<div id="main">
	<div class="p">
		<?php
			if (isset($_POST['name'])){
				$_SESSION['Username'] = $_POST['name'];
			}
				echo "You are currently logged in as " . $_SESSION['Username'];
		?>
			
			Thank you for your purchase.
	
	</div>
</div>

<div id="nav">
	<div class="topleft">
		<a href="home.php">Home</a>
	</div>
	<div class="topright">
		<a href="about.php">About</a>
	</div>
	<div class="bottomleft">
		<a href="phones.php">Phones</a>
	</div>
	<div class="bottomright">
		<a href="shoppingbasket.php">Shopping Basket</a>
	</div>
</div>

<div id="footer">
	<div class="p">
	<script type="text/javascript">
		document.write("This page was last modified on: " + document.lastModified);
	</script>
	<br>
	The information provided on this and other pages by me, Richard 
	Addicott (ria4@aber.ac.uk), is under my own personal responsibility and not that
	of Aberystwyth University. Similarly, any opinions expressed are my own and 
	are in no way to be taken as those of A.U.
</div>
</div>
</body>
</html>
