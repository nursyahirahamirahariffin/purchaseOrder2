<!DOCTYPE html>
<html>

<head>

<title>PURCHASE ORDER SYSTEM</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
</body>

</html>

<title></title>


<body>

<header>
<?php include 'header.php';?>
</header>

<section>
	<nav>
	<?php include 'navigation.php';?>
	</nav>
	
	<article>
	<h2 style="text-align:center">Ruangan Carian</h2>
	<form action="searchaction.php" id="form" method="GET">
	<table>
		<tr>
			<td>Carian Borang Penerimaan Penghantaran</td>
			<td><input type="text" name="searchfield" maxlength="100" placeholder="search" required></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
			<input type="submit" value="Submit">
			<input type="reset" value="Reset"></td>
		</tr>
		
	</table>
	</article>
</section>

<footer>
	<?php include 'footer.php';?>
</footer>
</body>
</html>

