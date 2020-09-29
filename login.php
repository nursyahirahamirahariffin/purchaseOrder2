<!DOCTYPE html>
<html>

<head>

<title>STUDENT REGISTRATION</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
<header>
<h2>ONLY AUTHORIZED USER IS ALLOWED</h2>
</header>

<section>
	<nav>
	<ul>
	<li><a href="login.php">Please Login First</a></li>
	</ul>
	</nav>
	
	<article>
	<h2 style="text-align:left">Login</h2>
	<form action="loginaction.php" id="form" method="POST">
	<table>
		<tr>
			<td>Staff ID</td>
			<td><input style="text-align:center" type="text" name="staffid" maxlength="10" placeholder="Staff Id" required></td>
		</tr>
		
		<tr>
		<td>Password</td>
			<td><input style="text-align:center" type="text" name="password" maxlength="10" placeholder="Password" required></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
			<input type="submit" value="Login">
			<input type="reset" value="Reset">
			</td>
		</tr>
	</table>
	</article>
</section>

<footer>
<?php include 'footer.php';?>
</footer>

</body>
</html>

		
	
	</article>
</section>

<footer>
<?php include 'footer.php';?>
</footer>

</body>
