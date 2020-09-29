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
	<h2 style="text-align:center">ORDER QUOTATION FORM</h2><br>
	<form action="insertquotationformaction.php" id="form" method="POST">
	<table>

		<tr>
			<td>Nama Pembekal</td>
			<td><input type="text" name="namapembekal1" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Kadar Harga</td>
			<td><input type="text" name="harga1" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Nama Pembekal</td>
			<td><input type="text" name="namapembekal2" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Kadar Harga</td>
			<td><input type="text" name="harga2" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Nama Pembekal</td>
			<td><input type="text" name="namapembekal3" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Kadar Harga</td>
			<td><input type="text" name="harga3" maxlength="100" required></td>
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
