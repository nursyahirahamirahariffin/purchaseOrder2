<!DOCTYPE html>
<html>

<head>

<title>PERBADANAN MELAKA HOLDINGS</title>

<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
</body>

</html>


<body>

<header>
	<?php include 'header.php';?>
</header>

<section>
	<nav>
		<?php include 'navigation.php';?>
	</nav>
	
	<article>
	<h2 style="text-align:center">PURCHASE ORDER FORM FORM</h2><br>
	<form action="purchaseorderformaction.php" id="form" method="POST">
	<table>

		<tr>
			<td>Perkara</td>
			<td><input type="text" name="perkara" maxlength="100"required></td>
		</tr>
		
		<tr>
			<td>Kuantiti</td>
			<td><input type="number" name="kuantiti" maxlength="100"required></td>
		</tr>
		
		<tr>
			<td>Kos Seunit</td>
			<td><input type="number" name="harga" maxlength="100"required></td>
		</tr>
		
		<tr>
			<td> Select file</td>
			<td><input type="file" name="myfile"></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
			<input type="submit" value="Submit">
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
