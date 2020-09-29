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
		$norefpermohonan="PMH-RF ".date("yy").rand(100000,999999);
		$namapemohon=$_POST["namapemohon"];
		$jawatanpemohon=$_POST["jawatanpemohon"];
		$unitpemohon=$_POST["unitpemohon"];
		$perkara=$_POST["perkara"];
		$kos=$_POST["kos"];
		$kuantiti=$_POST["kuantiti"];
		
		
		$conn=OpenCon();
		
		$sql="INSERT INTO REQUESTFORM (norefpermohonan,namapemohon,jawatanpemohon,unitpemohon,perkara,kos,kuantiti)
		      VALUES ('$norefpermohonan','$namapemohon','$jawatanpemohon','$unitpemohon','$perkara','$kos','$kuantiti')";
			  
		if(mysqli_query($conn,$sql))
		{
			//echo  "NEW RECORD CREATED SUCCESSFULLY \n";
			$sql2="select * from requestform r ";
			$result=$conn->query($sql2);
			
			if($result->num_rows>0)
			{
				//output data of each rows
				while($row=$result->fetch_assoc())
				{
					$namapemohon=$row["namapemohon"];
					$jawatanpemohon=$row["jawatanpemohon"];
					$unitpemohon=$row["unitpemohon"];
					$perkara=$row["perkara"];
					$kos=$row["kos"];
					$kuantiti=$row["kuantiti"];
					
					
		
					echo "<table>";
					
						echo"<tr>";
							echo "<td>NO RUJUKAN PERMOHONAN</td>";
							echo "<td>$norefpermohonan</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>NAMA PEMOHON</td>";
							echo "<td>$namapemohon</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>JAWATAN PEMOHON</td>";
							echo "<td>$jawatanpemohon</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>UNIT PEMOHOHN</td>";
							echo "<td>$unitpemohon</td>";
						echo "</tr>";
						
						
						echo"<tr>";
							echo "<td>PERKARA</td>";
							echo "<td>$perkara</td>";
						echo "</tr>";
						
						echo"<tr>";
							echo "<td>KOS</td>";
							echo "<td>$kos</td>";
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