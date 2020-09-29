<!DOCTYPE html>
<html>

<head>

<title>STUDENT REGISTRATION SYSTEM</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
</body>

</html>

<title>UNIVERSITI TEKNOLOGI MARA</title>

<body>

<header>
<?php include 'header.php';?>
</header>

<section>
	<nav>
	<?php include 'navigation.php';?>
	</nav>
	<article>
	
	
<?php
		$norefquotation="PMH-QF ".date("yy").rand(100000,999999);
		$namapembekal1=$_POST["namapembekal1"];
		$harga1=$_POST["harga1"];
		$namapembekal2=$_POST["namapembekal2"];
		$harga2=$_POST["harga2"];
		$namapembekal3=$_POST["namapembekal3"];
		$harga3=$_POST["harga3"];
		
		
		$conn=OpenCon();
		
		$sql="INSERT INTO QUOTATIONFORM (norefquotation,namapembekal1,harga1,namapembekal2,harga2,namapembekal3,harga3)
		      VALUES ('$norefquotation','$namapembekal1','$harga1','$namapembekal2','$harga2','$namapembekal3','$harga3')";
			  
		if(mysqli_query($conn,$sql))
		{
			//echo  "NEW RECORD CREATED SUCCESSFULLY \n";
			$sql2="select * from quotationform q ";
			$result=$conn->query($sql2);
			
			if($result->num_rows>0)
			{
				//output data of each rows
				while($row=$result->fetch_assoc())
				{
					$norefquotation=$row["norefquotation"];
					$namapembekal1=$row["namapembekal1"];
					$harga1=$row["harga1"];
					$namapembekal2=$row["namapembekal2"];
					$harga2=$row["harga2"];
					$namapembekal3=$row["namapembekal3"];
					
					
		
					echo "<table>";
					
						echo"<tr>";
							echo "<td>NO RUJUKAN SEBUT HARGA</td>";
							echo "<td>$norefquotation</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>NAMA PEMBEKAL 1</td>";
							echo "<td>$namapembekal1</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>KADAR HARGA 1</td>";
							echo "<td>$harga1</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>NAMA PEMBEKAL 2</td>";
							echo "<td>$namapembekal2</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>KADAR HARGA 2</td>";
							echo "<td>$harga2</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>NAMA PEMBEKAL 3</td>";
							echo "<td>$namapembekal3</td>";
						echo "</tr>";
		
						echo"<tr>";
							echo "<td>KADAR HARGA 3</td>";
							echo "<td>$harga3</td>";
						echo "</tr>";
						
					echo "</table>";
				}
			}
		}
		
		else
		{
			echo "ERROR : ".$sql."<br>".mysqli_error($conn);
		}
	

		CloseCon($conn);
		
	
	
	
		
?>
<table>
<tr>
	<td colspan="2" align="left">
	<input type="button" value="Home" onclick="window.location.href='homePage.php'">
	</td>
	</tr>
</table>

</article>
</section>

<footer>
	<p>by Syahirah Amirah</p>
</footer>

</body>
</html>