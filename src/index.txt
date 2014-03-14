<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php 
//Start a session, maintain it - until user selects LOGOUT
session_start(); 
?>
<html>
<head>
	<title>Home - CS25010</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>

<div id="header">
	<ul>
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="phones.php">Phones</a></li>
		<li><a href="shoppingbasket.php">Shopping Basket</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>

<div id="banner">
	<div class="h1">
		Welcome to users.aber.ac.uk/ria4
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
			<form method="post" action="index.php">
				Username: <input type="text" name="name"><br/>
				<input type="submit" name="submit" value="Submit">
			</form>
		
		The source code for my website can be found in the links below (as I was unable
		to correctly implement the code to allow for viewing of code).
		<a href="index.txt">Index</a>
		<a href="about.txt">About</a><a href="phones.txt">Phones</a>
		<a href="shoppingbasket.txt">Shopping Basket</a><a href="logout.txt">Logout</a>
		
		<br>Welcome to my website created as part of the CS250 module, the intention 
		is to create an application that runs over the web to produce a 'phone shop'
		that the user can interact with and 'buy' a selection of devices.
		
		This website consists of a number of different features that are
		produced by combinations of PHP, XHTML, CSS and JavaScript. The website 
		itself is written in XHTML and formatted with a Cascading Style Sheet. The
		Phones web page is predominantly created as a result of PHP, to create
		a connection to the database. The result of this is then output to the user
		in the form of a HTML table, and then the user is required to make a selection
		of devices and add them to the user session shopping basket.
		The Shopping Basket web page will then use the selection from the user and show
		it in a table to the user - whom is then prompted to enter their (fake) details to 
		process the purchase.
		The website also includes an assignment writeup on the About navigation link which 
		explains the creation of the website, how I approached the design, the problems that
		I encountered during the implementation of this task and how I solved them.
		<br>
		<br>The information provided on this and other pages by me, Richard Addicott 
		(ria4@aber.ac.uk), is under my own personal responsibility and not that of 
		Aberystwyth University. Similarly, any opinions expressed are my own and are in no
		way to be taken as those of A.U. 
	</div>
</div>

<div id="nav">
	<div class="topleft">
		<a href="about.php">About</a>
	</div>
	<div class="topright">
		<a href="phones.php">Phones</a>
	</div>
	<div class="bottomleft">
		<a href="shoppingbasket.php">Shopping Basket</a>
	</div>
	<div class="bottomright">
		<a href="logout.php">Logout</a>
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
