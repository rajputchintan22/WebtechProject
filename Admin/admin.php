<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/indx.css">
    <link rel="stylesheet" href="css/second.css" type="text/css" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
    color:black ;
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
.ab{
  
  padding-left:2%;
  padding-right:2%;
}
.ac
{
  padding-top:35px;
}

.btnform:hover, .signupbtn:hover {
  text-color:white;
  background-color:green;
  cursor:pointer;
}
.btns{    
    display:inine-block;
    background-color: blue;
    color: white;
  
    font-size: 16px;
    margin-top:0px;
    margin-right:4px;
    padding: 10px 34px; 
  
    cursor:pointer;
    border-color:blue;
    border-radius: 5px;
    float: left; 
   }

.btns:hover,.btn1:hover{
             background-color: green;
             border-color:green;
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
      </div>
      <div class="collapse navbar-collapse" id="bs-nav-demo">
        <li><ul class="nav navbar-nav"></li>
                <li class="active"><a href="admin.php" style="color:white;">Stories</a></li>
        <li ><a href="addstories.html" style="color:white;">Add Stories</a></li>
        </ul> 
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php" style="color:white;" > SignOut</a></li>
        
        
 
        </ul>
      </div>
    </div>
  </nav>
  <?php
  
      include 'connect.php';
      $sql="select * from stories";
      $result=mysqli_query($conn,$sql);
        echo "<div class='container1'>";
      $countrow=0;
      while($res=mysqli_fetch_assoc($result))
      {
        if($countrow==3)
        {
          echo"</div>";
          $countrow=0;
        }
        if ($countrow==0) 
        {
          echo"<div class='row'>";    
        }
        echo" 
          <div class='col-md-4' data-aos='flip-up'>
              <div class='thumbnail'>
                  <img src='$res[folder]' style='width:100px height:100px'>
                    <div class='caption'><p style='font-family: Bodoni MT Condensed; font-size:30px;'>$res[sname]</p></div>
                    <div class='lft'>       
                    <a href='delete.php?ps=$res[sno]'> <button class='btn btn-success' style='float:right; border:0.5px solid white;'>DELETE</button></a>
                    <div style='height:50px;'> </div>
                  </div>
                </div>
              </div>
          ";
        $countrow=$countrow+1;
      }
      echo "</div>";
    ?>
    </div>
</div>
</body>
</html>