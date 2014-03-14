<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php 
	session_start();

	$conn = pg_connect("host=db.dcs.aber.ac.uk port=5432 
	dbname=teaching user=csguest password=r3p41r3d");
		if(!$conn){
			die('Could not connect: ' . pg_error());
			}
	$res = pg_query ($conn, "SELECT * FROM phones ORDER BY manufacturer");
	$_SESSION['shoppingbasket'] = array($a['ref']);
?>
<head>
	<script type = "text/javascript">
	//<![CDATA[
		function validate_User_Input()
		{
			email = document.forms[0].email.value.length;
			cardNo = document.forms[0].card.value.length;
			if (email < 1 || cardNo != 16) 
			{
				alert('Please enter valid details into the correct field.');
			}
			else 
			{
				
			}			
		}
	//]]</script>
	<title>Shopping Basket - CS25010</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="phones.php">Phones</a></li>
			<li class="active"><a href="shoppingbasket.php">Shopping Basket</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<div id="banner">
	<div class="h1">
		Shopping Basket
	</div>
	<div class="h2">
		CS25010 Web Programming
	</div>
</div>
<div id="large-main">
	<div class="p">
		<?php 
			echo "You are currently logged in as " . $_SESSION['Username'];
		?>	
		<form action='shoppingbasket.php' method='post'>
		<input type = 'submit' value='Delete'>
		<?php
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>" . "Manufacturer" . "</th>";
			echo "<th>" . "Model" . "</th>";
			echo "<th>" . "OS" . "</th>";
			echo "<th>" . "Colour" . "</th>";
			echo "<th>" . "Screen" . "</th>";
			echo "<th>" . "Price" . "</th>";
			echo "<th>" . "Remove" . "</th>";
			echo "</tr>";
						
			while ($a = pg_fetch_array($res)){
				$_SESSION['shoppingbasket'] = array($a['ref']);
			if (isset($_POST['remove'])){
				
			} else {
			
			if (isset($_POST[$_SESSION['shoppingbasket'][0]]))
			{
				echo "<tr>";
				echo "<td>" . $a["manufacturer"] . "</td>";
				echo "<td>" . $a["model"] . "</td>";
				echo "<td>" . $a["os"] . "</td>";
				echo "<td>" . $a["colour"] . "</td>";
				echo "<td>" . $a["screen"] . "</td>";
				echo "<td>" . $a["price"] . "</td>";
				echo "<td> <input type = 'checkbox' name= 'remove' value = '$a[ref]'></td>";
				echo "</tr>";
			} 
		}
	}
	echo "</table\n";	
	?>
	This is not a real web shop; 
	it is created as part of my university coursework. Please do not attempt to buy anything
	from this site, nor enter your real card details.
	<form action = "confirmation.php" method="post">
		Email Address: <input type="text" name="email"><br>
		Card Number (16-digit): <input type="text" name="number"><br>
		<input type="button" onclick="confirmation.php" value="Submit" />
	</form>
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