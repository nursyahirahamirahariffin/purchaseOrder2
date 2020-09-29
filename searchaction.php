<!DOCTYPE html>
<html>

<head>

<title>COURSE REGISTRATION SYSTEM</title>
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
	<h2 style="text-align:center">Result Of Serching</h2>
	<?php
		$searching=$_GET["searchfield"];
		$conn=OpenCon();
		
		
		$sql="select *
			  from deliveryorderform r,staff s,supplier c
			  where r.staffid=s.staffid
			  and r.supplierid=c.supplierid
			  and (r.dorefno like '%$searching%'
			  or r.itemreceive like '%$searching%'
			  or r.datereceive like '%$searching%'
			  or c.suppliername like '%$searching%'
			  or s.namastaff like '%$searching%'
			  or s.staffid like '%$searching%'
			  or c.supplierid like '%$searching%')";
			  
			  $result=$conn->query($sql);
			 
			  
				  echo"<table>";
					echo "<tr>";
					echo "<th>No Rujukan</th>";
					echo "<th>Perkara</th>";
					echo "<th>Tarikh diterima</th>";
					echo "<th>Nama Pembekal</th>";
					echo "<th>Nama Staff</th>";
					echo "<th>ID Staff</th>";
					echo "<th>ID Pembekal</th>";
					echo "<th></th>";
					echo "</tr>";
					
					if($result->num_rows>0)
					//output data of each row
					{
						while($row=$result->fetch_assoc())
						{
							$dorefno=$row["dorefno"];
							$itemreceive=$row["itemreceive"];
							$datereceive=$row["datereceive"];
							$suppliername=$row["suppliername"];
							$namastaff=$row["namastaff"];
							$staffid=$row["staffid"];
							$supplierid=$row["supplierid"];
							
							echo "<tr>";
								echo "<td>$dorefno</td>";
								echo "<td>$itemreceive</td>";
								echo "<td>$$datereceive</td>";
								echo "<td>$$suppliername</td>";
								echo "<td>$namastaff</td>";
								echo "<td>$staffid</td>";
								echo "<td>$supplierid</td>";
							echo "</tr>";
								
							
							
							/*echo "<tr>";
								echo "<td><a href=displayregistrationdetails.php?regid=$regid>$regid</a></td>";
								echo "<td>$regdate</td>";
								echo "<td><a href=displaystudentdetails.php?studentid=$studentid>$studentid</a></td>";
								echo "<td>$studentname</td>";
								echo "<td><a href=displaystudentdetails.php?courseid=$courseid>$courseid</a></td>";
								echo "<td>$coursename</td>";*/
								
								/*echo "<td>"?><button onclick="window.location.href='updateregdetails.php?regid=<?php echo $regid ?>'">UPDATE</button>
											 <button onclick="confirmDelete('<?php echo $regid ?>')"DELETE</button><?php "</td>";*/
											 
							echo "</tr>";
						}
					}
					else
						echo "Error in fetching data";
					
				echo "</table>";
				
			

		CloseCon($conn);
		
		?>
		<table>
			<tr>
				<td colspan="2" align="right">
					<input type="button" value="Back" onclick="history.back()" />
				</td>
			</tr>
		</table>
	</article>
	
</section>

<footer>
<?php include 'footer.php';?>
</footer>

</body>
