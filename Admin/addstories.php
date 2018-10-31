<?php
 
 include 'connect.php';
 
include 'pno.php';
 
$name=$_POST['name'];
 $filename = $_FILES["uploadfile"]["name"];
 $tempname = $_FILES["uploadfile"]["tmp_name"];
 $folder="storyImages/".$filename;
 move_uploaded_file($tempname,$folder);
 
$sql="INSERT INTO `stories`(`sno`, `sname`, `folder`) VALUES ($pno,'$name','$folder')";
$res=mysqli_query($conn,$sql);
 
if($res)
{
	echo ("<script LANGUAGE='JavaScript'>
    alert('SUCCSESSFULLY INSERTED DATA ');
    window.location.href='addstories.html';
    </script>");	
	
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    alert('INVALID DATA ');
    window.location.href='addstories.php';
    </script>");	
	
}
?>