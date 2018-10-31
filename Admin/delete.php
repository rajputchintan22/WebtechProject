<?php

include 'connect.php';
$pid=$_GET['ps'];

$qry = "DELETE FROM stories WHERE sno='$pid'";

$result=mysqli_query($conn,$qry);


if($result)
{
	echo ("<script LANGUAGE='JavaScript'>
    alert('SUCCESSFULLY DELETE DATA');
    window.location.href='admin.php';
    </script>");

}else
{
	echo ("<script LANGUAGE='JavaScript'>
    alert('YOU CANNOT DELETE THIS DATA');
    window.location.href='admin.php';
    </script>");
}
?>