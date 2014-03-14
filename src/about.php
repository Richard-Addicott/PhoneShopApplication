<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php
session_start();
?>
<html>
<head>
	<title>About - CS25010</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id="header">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li class="active"><a href="about.php">About</a></li>
		<li><a href="phones.php">Phones</a></li>
		<li><a href="shoppingbasket.php">Shopping Basket</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
<div id="banner">
	<div class="h1">
		About
	</div>
	<div class="h2">
		CS25010 Web Programming
	</div>
</div>
<div id="large-main">
<div class="p1">
	<?php
		if (isset($_POST['name'])){
			$_SESSION['Username'] = $_POST['name'];
		}
			echo "You are currently logged in as " . $_SESSION['Username'];
	?>
<br>
The main objective of this assignment was to overall create a website
combining a number of key features to produce a 'phone shop'. The 
objectives of the task:
	To use PHP to create an application that runs over the web -
This was achieved by using a number of features that will be thoroughly
described below. There are a variety of languages that have been used in 
the implementation of this project, these include PHP, XHTML, CSS and JavaScript.
	To gain experience with working with databases on the server side -
This was achieved by using the relevant commands to open the connection
to the database provided. I also included some validation to ensure that
the connection to the database was open. After this, some SQL code is used
to select table from the database and order the phones by manufacturer.
	To write PHP code to access and display data from a database -
This action was fairly simple after learning the basics of the PHP language,
I was able to create a number of PHP functions with ease 
	To write some SQL statements -
This feature of the task was achieved by interacting with the database
provided as part of the assignment. The database that is being used is 
stored on the University server - this particular database is in the form
of PostgreSQL. This caused a few problems for  due to my inexperience 
with this particular type of database (more used to mySQL databases). This
meant that I needed to familiarise myself with the functions needed and
the ways that I could manipulate the data in the database. Fortunately,
the standard SQL statements that I used for obtaining the information
from the table in the database was the same as mySQL statements. 
	To write server-side code that maintains a session -
This particular part of the task was fairly simple, all that was
required was a number of simple PHP features to introduce a session
on each web page. This was done by using the 'session_start();' code
which initiates the user session on the homepage. I have then used
the same code on the subsequent web pages to continue the user session.
Preferably, with extended time period to complete the assignment - I 
would have liked to include a session expiry timer as an extra feature.
However, during the testing of this particular feature, it proved difficult
to implement correctly.
	To integrate client side form checking into a server side application -
This was done using JavaScript as this means that the validation process is much
faster and more efficient - due to the validation being run on the client side. Preferably,
I would have preferred to include more validation for all of the user
inputs. However, due to the time constraints for the assignment - this was not
possible.
<br>The sessions part of the assignment was fairly easy to implement and maintain
throughout the web site. This proved not a problem at all, it was simply created 
in the index.php and then displayed on every other subsequent page. The user is
prompted for their input and the POST data retrieval method is used to assign it 
to the session variable.
<br>I have also used a Logout page that is used to gather the details of the user
session and then unset the session variables. It also destroys the variables that are
contained within the session - this therefore acts as a logout page, because the
user details are lost.
<br>The design of the website is managed by a .css file - this was easy for
me due to the experience acquired in previous modules such as CS150. I took
the decision to replicate my CS150 web page by using my Cascading Style
Sheet from the last assignment. This is because I believe that it had a
professional feel as part of the project brief and promoted a good design 
using the ability to fit to any size of browser. The basis of the design
is fairly simple and is made of 3 main parts: Header, Main and Footer. The
Header and Footer of the web pages are fixed to their respective positions.
The navigation bar that I have designed, uses a hover feature that changes 
the colour of the text - and when the user is on a specific page, that 
navigation text will be highlighted as active.
<br>The main problem that I came across during the implementation of this website,
was the shopping basket and the process of getting the user selections from the
Phones web page to the shopping basket. I had the issue of transferring data
across web pages. The solution of this problem was to use the data in the array
found by using the key of the information that is in the database. This allowed
me to reference the specific and corresponding values of the data that the user
had selected previously from the Phone Shop page and allow me to replicate the
information on the Shopping Basket page.
<br>Through the website, I have used various validation to check my user inputs.
This includes e-mail address and card number text fields, which are checked for just
basic validation. If the user input is invalid, then the user is greeted with an alert
popup message prompting them to re-enter the data.
<br>The testing procedures for this assignment were fairly simple: The session variable 
was needed to be checked to ensure that it was correctly displayed on every web page.
The website has also been tested across the browsers of Firefox, Chrome and Internet Explorer.
I have tested the user input fields where I have validation, where I have entered 
erroneous data to see whether my validation correctly works. All of the above tests passed, 
and this allowed me to further my website implementation.
<br>As a review of the assignment - I am pleased with the output as it has given me
the opportunity to learn a significant amount of the PHP language. I am happy with 
the design of the web site as I believe I have produced a relatively professional
looking site for the time period spent on the project. To improve the website, 
I would have preferred to add some more filters to the Phone Shop web page to refine
the search process for the user - however this was an unrealistic target for the 
assignment. I would have liked to include the total price of the items in the Shopping
Basket of the user, however due to time constraints - I was unable to produce this
solution. In review, I am extremely pleased by the creation of my website.
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