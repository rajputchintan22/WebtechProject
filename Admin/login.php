<?php
	include 'connect.php';
	$qry="SELECT * FROM `admin` WHERE 1";
	$result=mysqli_query($conn,$qry);
	$row = mysqli_fetch_array($result);
	$uno = $row['ID'];
	$pso = $row['Password'];
 	$un=$_POST['email'];
	$ps=$_POST['pass'];
	if($uno==$un && $pso==$ps)
	{
		echo ("<script LANGUAGE='JavaScript'>
		    window.location.href='admin.php';
		    </script>");
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
		    alert('Wrong details.');
		    window.location.href='Admin login.html';
		    </script>");	
	}
?>