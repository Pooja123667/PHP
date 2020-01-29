<?php
$conn = mysqli_connect('localhost','root','','project');
session_start(); //to check the session

$test = $_SESSION['uid'];
global $test;         //if that variable consists the value...if true then direct it to next page!
//echo $test;

$conn = mysqli_connect('localhost','root','','project');
			$qr = "SELECT * FROM designer WHERE des_id = $test";
			$run = mysqli_query($conn, $qr);
			$exe = mysqli_fetch_assoc($run);
			$result = $exe['des_name'];




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Des_landing_page</title>
	<link rel="stylesheet" type="text/css" href="/css/stylez.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body style="background-color: #141314">
	<img style="float: left" width="90px" height="90px" src="/images/logo.png" alt="logo">
		<div class="profile_img">
			<img style="border-radius: 50%" width="60px" height="60px" src="/images/profile.png" alt="my_profile"><br><br>
			<button> <a href= logout.php> LOGOUT</a> </button>
			<!--<button> <a href= act1.php> EDIT</a> </button>--> <!-- to edit the profile it should redirect to this page with the original details for that id-->
			</div>
	
			<div class ="banner_des">
			
			
				<h1>Welcome, <?php echo $result; ?></h1>
	        </div>
	<main>
	<section class="feature_images">
	<!--
		<div class ="image_one">
		<img style="height: 90px" width="90px" src="/images/userzz.png" alt="search_users">
		</div>-->

		<div class ="image_one" style="margin-left:500px">
		<img style="height: 90px" width="90px"  src="/images/survey.png" alt="surveys">
		</div>
	
		<div class ="image_two">
		<img style="height: 90px" width="90px"  src="/images/idea.png" alt="surveys">
		</div>
		
		<!--
		<div class ="image_three">
		<img style="height: 90px" width="90px" src="/images/idea.png" alt="my_designs">
		</div>-->
		
		</section>
		<!--
		<div class="dropdown">
	  <button class="dropbtn" style="margin-left:250px">Users</button>		
	  </div>-->
		
		
		<div style="margin-left:505px" class="dropdown">
	  <button class="dropbtn" style="height:50px">Surveys</button>
	  <div class="dropdown-content">
	  <form action="postsurvey.php" method="POST"><button style="width:160px;height:50px; background-color:#39E8F5" type="submit" name="check">Post Survey</button></form> 
	  <form action="survey_results.php" method="POST"><button style="width:160px;height:50px; background-color:#39E8F5" type="submit" name="check">Survey Results</button></form> 	
			
	  </div>
        </div>
		
			<div style="margin-left:320px"  class="dropdown1">
	  <button class="dropbtn1">My Designs</button>
	  <div class="dropdown-content1">
	  <form action="upload_design.php" method="POST"><button style="width:160px;height:50px; background-color:#39E8F5" type="submit" name="check">Post Design</button></form> 
	  <form action="design_history.php" method="POST"><button type="submit" name="check" style="width:160px;height:40px; background-color:#39E8F5">See History</button></form> 
	  </div>
            </div>
			

	
	
	</main>
		 
			
		
</body>
</html>

