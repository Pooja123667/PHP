<?php
session_start();
$test=$_SESSION['uid'];
//echo $test;
?>


<!doctype html>
<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<title>My_Design</title>
<!--<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">-->

</head>

<body style="background-color:#f1fa3c">
<div class = "container-fluid" >
 <div class= "header">   

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="logout.php"><img src="\images\logo1.png" alt="main-logo" style="width:100px;height: 50px;border-radius: 18px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">About Us<!--<span class="sr-only">(current)</span>--></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            
            
          </ul>
         
        </div>
      </nav>
</div>
 


   <h1 style="text-align: center; color: #000000;font-size: 30px; margin-top: 7%;">Post Design</h1>
  <center>
   <form class=" table-dark table-hover col-xl-5" style="height:400px" method="POST" id="register" action="upload.php" enctype="multipart/form-data" onSubmit="alert('Posted Design successfully!');">
		<div class="design">
		<label style="color: white;font-size: 20px"> Design Name :</label>
		<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 20px;" type="text" name="des_name" id="name" placeholder="Enter design name"><br><br><br>
		
		<label style="color: white;font-size: 20px;">Design Brief :</label>
		
		<textarea name = "brief" rows="5" cols="50"> </textarea><br><br><br>
		
	<!--<img src="/images/attachment.png" style="width: 40px; height: 40px; float: left; background-color: #39E8F5; ">-->
    <!--<img src="/images/upload.png" style="width: 40px; height: 40px; background-color: #39E8F5; margin-left: 20px; float: left;">-->
    
    <input type="file" name="fileToUpload" id="fileToUpload" >
    
    <button class="btn btn-light"><input type="submit" value="post" name="post1" id="sub"></button>
    


	
	</form>
</center>
	
		
</body>

</html>