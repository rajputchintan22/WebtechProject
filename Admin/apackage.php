<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['emails'])) {
header('Location: index.php');
}
?>

<html lang="en">
<head>  
<title>10 PM PRODUCTION</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/indx.css">
	

	
	 <link rel="stylesheet" href="css/second.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  	<script src="file:///E:/Internship/Final/aos-master/dist/aos.css"></script>
  <link rel="stylesheet" type="text/css" href="plugins/aos.css">

 
 <style>
 
	

     body, html {
                height: 100%;
                margin: 0;
                }

			
		.container1 {
    padding: 25px;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 40px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-image: rgba(44, 62, 80,0.7);
    padding-top: 0px;
}

/* Modal Content/Box */
.modal-content {
    background-color: rgba(44, 62, 80,0.7);
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 65%; /* Could be more or less, depending on screen size */
    border-radius:15px;
}

/* Style the horizontal ruler */

 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 52px;
    top: 19px;
    font-size: 60px;
    font-weight: bold;
    color:black	;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 80%;
    }
}
.btns {       
-    background-color: blue;
    color: white;
      }


 input[type=text],  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.btnform {
    padding: 14px 20px;
    padding-left:20px;
    background-color: blue;
    border-radius:12px;
    font-size:15px;
    color:white;
}
/* Float cancel and signup buttons and add an equal width */
.btnform, .signupbtn {
  float: left;
  width: 50%;
}

.btnform:hover, .signupbtn:hover {
  text-color:white;
  background-color:green;
  cursor:pointer;
}

.lft{
	float:right;
	}

	#hpa
	{
		box-sizing: content-box;
		padding: 10px;
		width: 190px;
		border:double;
		border-top-width: 0px;	
	}

#hax
{
  	box-sizing: content-box;
  	padding: 10px;
  	width: 185px;
  	border:double;   
	
}


</style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="index.php" class="navbar-brand"style="color:blue;  font-family:forte;"> 10 PM PRODUCTION</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<li><ul class="nav navbar-nav"></li>
				<li ><a href="index.php" style="color:white;">Home</a></li>
                <li class="active"><a href="apackage.php" style="color:white;">Packages</a></li>
				<li><a href="addpackage.php" style="color:white;">Add Package</a></li>
                <li><a href="bookinginfo.php" style="color:white;">Booking Information</a></li>
				<li><a href="paymentinfo.php" style="color:white;">Payment Information</a></li>
				<li><a href="shooting.php" style="color:white;">Shooting</a></li>
				 </ul>	
				<ul class="nav navbar-nav navbar-right">
				<li><a href="logoutadmin.php" style="color:white;" > SIgnOut</a></li>
				
				
 
				</ul>
			</div>
		</div>
	</nav>
<?php
include 'connectdb.php';

$sql = "SELECT * from signup";
$result=mysqli_query($conn,$sql);
$res=mysqli_num_rows($result);

$sql2 = "SELECT * from book";
$result2=mysqli_query($conn,$sql2);
$res2=mysqli_num_rows($result2);

?>



	<div class="row counter" style="padding-top:120px;">
      			<div class="col-md-6" data-aos="fade-down">
          			<center><b><p id="demo1"><?php  print $res; ?></p></b><div class="caption"><p>Total User</p></div></center>
          		</div>
    		    <div class="col-md-6" data-aos="fade-down">
      				<center><b><p id="demo2"><?php  print $res2; ?></p></b><div class="caption"><p>Booked Package</p></div></center>
          		</div>
    		   

  		</div>
</br>
</br>
</br>
</br>
<div class="tab1" style="padding-left:6%;" ><H1><div	ID="hax">Packages</div></H1></div>
<h1 style="padding-left:8%;"><strong></strong></h1>
<?php
	
	include 'connectdb.php';
	$sql="select * from package";

    $result=mysqli_query($conn,$sql);
   
   echo "<div class='container' id='m2'>
   <div class='row'>
		<h1 class='m1' style='padding-top:40px;'> </h1>";
	while($res=mysqli_fetch_assoc($result))
	{
	  

  echo"	  
	  
			<div class='col-md-6 col-sm-12'>
				<div class='thumbnail'>
					<img src='$res[folder]'>
					
					
					<h3 class='m1'><center><strong>$res[pname]</strong></center></h3>
					<table>
					<tr>
					   <td><p ><b>Price</b></p></td>
					   <td><p style='color:red;'><b>:</b >&#x20B9; $res[price]</p></td>
					 </tr>	
					 
					 <tr>
					   <td><p><b>Location</b></td>
					   <td><b>:</b> $res[location]</p></td>
					 </tr>	
					 
					 <tr>
					   <td><p><b>Duration</b></td>
					   <td> <b>:</b>$res[duration]</p></td>
					 </tr>	
					 
					 <tr>
					   <td><p><b>SoftCopy</b></td>
					   <td> <b>:</b>$res[softcopy]</p></td>
					 </tr>
					 
					 <tr>
					   <td><p><b>PhotoBook</b></td>
					   <td><b>:</b> $res[photobook]</p></td>
					 </tr>	
					 
					  <tr>
					   <td><p><b>CinematicMovie</b></td>
					   <td><b>:</b> $res[cinematicmovie]</p></td>
					 </tr>
					 
					  <tr>
					   <td><p><b>PhotoFrame</b></td>
					   <td><b>:</b> $res[photoframe]</p></td>
					 </tr>
					 
					  <tr>
					   <td><p><b>SlideShowVideo</b></td>
					   <td><b>:</b> $res[slideshowvideo]</p></td>
					 </tr>
					 
					 <tr>
					   <td><p><b>Transport</b></td>
					   <td><b>:</b> $res[transport]</p></td>
					 </tr>
					 
					 
					 
					 
					 </table>
						
			  							<div class='lft'>				
					<a href='delete.php?ps=$res[pno]'> <button class='btn btn-success' style='float:right; border:0.5px solid white;'>DELETE</button></a>
					 <a href='edit.php?ps=$res[pno]'><button type='submit' name='submit3' class='btn btn-success' style='float:right; border:0.5px solid white;'>EDIT</button></a></div>
				 
				 
	 				
					<div style='height:50px;'> </div>
					</div>	
			</div>"; 

					
	} ?>
    </div>
</div>	
<script>
	var x=0;
	var delay=2000;
	var i;
	var p=document.getElementById("demo1").innerHTML;
	function pr()
	{
		document.getElementById("demo1").innerHTML = x ;
		x++;
	}
	for(i=0; i<=p; i++)
	{
		delay=delay+50;
		setTimeout(pr, delay);
	}
	</script>
	<script>
	var y=0;
	var delay=2000;
	var i;
	var p1=document.getElementById("demo2").innerHTML;
	function pr()
	{
		document.getElementById("demo2").innerHTML = y ;
		y++;
	}
	for(i=0; i<=p1; i++)
	{
		delay=delay+50;
		setTimeout(pr, delay);
	}
	</script>
	<script>
	var z=0;
	var delay=2000;
	var i;
	var p2=document.getElementById("demo3").innerHTML;
	function pr()
	{
		document.getElementById("demo3").innerHTML = z ;
		z++;
	}
	for(i=0; i<=p2; i++)
	{
		delay=delay+50	;
		setTimeout(pr, delay);
	}

	</script>

<script>
// Get the modal
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
//alert(event.target.tagName);
    if (event.target == document.getElementById('id06')) {
        
        document.getElementById('id06').style.display = "none";
     }
}
</script>						
<script src="plugins/aos.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>

	<script src="js/jqueryqq.js"></script>
<script src="js/bootstrap.min.js"></script>
	
	