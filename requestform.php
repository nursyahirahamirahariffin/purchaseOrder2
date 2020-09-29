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
	<h2 style="text-align:center">REQUEST PURCHASE FORM</h2><br>
	<form action="insertrequestformaction.php" id="form" method="POST">
	<table>

		<tr>
			<td>Nama Pemohon</td>
			<td><input type="text" name="namapemohon" maxlength="100" placeholder="Eg : Aminah Ali" required></td>
		</tr>
		
		<tr>
			<td>Jawatan</td>
			<td><input type="text" name="jawatanpemohon" maxlength="100" placeholder="Eg : Pembantu Eksekutif" required></td>
		</tr>
		
		<tr>
		<td>Bahagian / Unit</td>
							<td><select id="unitpemohon" name="unitpemohon">
							<option value="Unit Pembangunan Pelaburan Kewangan & Akaun">Unit Pembangunan Pelaburan Kewangan & Akaun</option>
							<option value="Unit Perkhidmatan Insurans & Takaful">Unit Perkhidmatan Insurans & Takaful</option>
							<option value="Unit Pembangunan Pemasaran">Unit Pembangunan Pemasaran</option>
							<option value="Unit Pembangunan Bisnes & Perladangan">Unit Pembangunan Bisnes & Perladangan</option>
							<option value="Unit Pentadbiran Korporat,Pengurusan Sumber Manusia & Kualiti">Unit Pentadbiran Korporat,Pengurusan Sumber Manusia & Kualiti</option>
							<option value="Unit Teknologi Maklumat">Unit Teknologi Maklumat</option>
							</select></td>
		</tr>
		
		<tr>
			<td>Perkara</td>
			<td><input type="text" name="perkara" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Kos</td>
			<td><input type="double" name="kos" maxlength="100" required></td>
		</tr>
		
		<tr>
			<td>Kuantiti</td>
			<td><input type="text" name="kuantiti" maxlength="100" required></td>
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
