<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php
 session_start();

	$conn = pg_connect("host=db.dcs.aber.ac.uk port=5432 
	dbname=teaching user=csguest password=r3p41r3d");
	if(!$conn)
	{
		die('Could not connect: ' . pg_error());
	}
	$sort = "manufacturer";
	$greater= 0;
	$less=9999999.99;
?>
<head>
	
	<title>Phone Shop - CS25010</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
			<div id="header">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li class="active"><a href="phones.php">Phones</a></li>
		<li><a href="shoppingbasket.php">Shopping Basket</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
			
		<div id="banner">
	<div class="h1">
		Phone Shop
	</div>
	<div class="h2">
		CS25010 Web Programming
	</div>
</div>
<div id="large-main">
<div class="p">
		<form action = "phones.php" method="post">
		Greater than: <input type = "text" name="greater">
		<input type = "submit" value="Update">
		</form>
		<form action = "phones.php" method="post">
		Less than: <input type = "text" name="lower">
		<input type = "submit" value="Update">
		</form>
		
		<form action = "shoppingbasket.php" method = "post">
		<input type = "submit" value="Add to cart">
		</div>
		<?php
			if(isset($_POST['greater'])){
				$greater = $_POST['greater'] ;
			}			
			if(isset($_POST['lower'])){
				$less = $_POST['lower'] ;
			}
		?>
		
		<?php 
			
			$res = pg_query ($conn, "select * from phones order by $sort");
			if($_SESSION['Username'] == ""){
			echo "Please log in to purchase any items";
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>" . "Manufacturer" . "</th>";
			echo "<th>" . "Model" . "</th>";
			echo "<th>" . "OS" . "</th>";
			echo "<th>" . "Colour" . "</th>";
			echo "<th>" . "Screen" . "</th>";
			echo "<th>" . "Price" . "</th>";
			echo "<th>" . "Description" . "</th>";
			echo "</tr>";
			
			
				while ($a = pg_fetch_array($res)){
			if ($a['price'] > $greater && $a['price'] < $less){
			{
				echo "<tr>";
				echo "<td>" . $a["manufacturer"] . "</td>";
				echo "<td>" . $a["model"] . "</td>";
				echo "<td>" . $a["os"] . "</td>";
				echo "<td>" . $a["colour"] . "</td>";
				echo "<td>" . $a["screen"] . "</td>";
				echo "<td>" . $a["price"] . "</td>";
				echo "<td>" . $a["description"] . "</td>";
				echo "</tr>";
				$_SESSION['shoppingCart'][$a['ref']];
			}
			}
			}echo "</table\n";
			}else{
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>" . "Select" . "</th>";
			echo "<th>" . "Manufacturer" . "</th>";
			echo "<th>" . "Model" . "</th>";
			echo "<th>" . "OS" . "</th>";
			echo "<th>" . "Colour" . "</th>";
			echo "<th>" . "Screen" . "</th>";
			echo "<th>" . "Price" . "</th>";
			echo "<th>" . "Description" . "</th>";
			echo "</tr>";
			$_SESSION['shoppingbasket'] = array($a[ref]);
			
			while ($a = pg_fetch_array($res)){
			if ($a['price'] > $greater && $a['price'] < $less){
			{
				echo "<tr>";
				echo "<td> <input type = 'checkbox' name=$a[ref] value='ref'></td>";
				echo "<td>" . $a["manufacturer"] . "</td>";
				echo "<td>" . $a["model"] . "</td>";
				echo "<td>" . $a["os"] . "</td>";
				echo "<td>" . $a["colour"] . "</td>";
				echo "<td>" . $a["screen"] . "</td>";
				echo "<td>" . $a["price"] . "</td>";
				echo "<td>" . $a["description"] . "</td>";
				echo "</tr>";
				$_SESSION['shoppingbasket'][$a['ref']];
			}
			}
			}echo "</table\n";
			}
		
			
			while ($a = pg_fetch_array($res)){
			if ($a['price'] < $greater && $a['price'] > $less){
			{
				echo "<tr>";
				echo "<td> <input type = 'checkbox' name=$a[ref] value='ref'></td>";
				echo "<td>" . $a["manufacturer"] . "</td>";
				echo "<td>" . $a["model"] . "</td>";
				echo "<td>" . $a["os"] . "</td>";
				echo "<td>" . $a["colour"] . "</td>";
				echo "<td>" . $a["screen"] . "</td>";
				echo "<td>" . $a["price"] . "</td>";
				echo "<td>" . $a["description"] . "</td>";
				echo "</tr>";
				$_SESSION['shoppingbasket'][$a['ref']];
			}
			}
			}echo "</table\n";
		?>
		
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