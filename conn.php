<?php
function OpenCon()
{
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="purchase-order";
	
	$conn=new mysqli($dbhost,$dbuser,$dbpass,$db)
		or die("CONNECTION FAILED : $s\n".$conn->error);
	
	return $conn;
	}
	
	function CloseCon($conn)
	{
	$conn->close();
	}
?>