<?php
include 'connect.php';

 $qry="SELECT sno FROM storie_no";
 
 $result=mysqli_query($conn,$qry);
 $pno=mysqli_num_rows($result);
 $pno=$pno+1;
 
 $sql="INSERT INTO storie_no(sno) VALUES('$pno')";

mysqli_query($conn,$sql);
 ?>