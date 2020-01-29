<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$qry = "SELECT COUNT(int_id) from `interviewee`";
$run = mysqli_query($connect,$qry);
$run1 = mysqli_fetch_array($run);
$quantity = $run1[0];

$qry = "SELECT COUNT(des_id) from `designer`";
$run1 = mysqli_query($connect,$qry);
$run2 = mysqli_fetch_array($run1);
$quantity1 = $run2[0];

?>

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" type="text/css" href="/css/pstylesheet.css">
<style>
body {
		background-color: #141314;
	}
	
h1 {
		text-align: center;
		font-family: Segoe UI;
		font-size: 50px;
		color: white;
}


div  {
		width: 250px;
		height: 55px;
		border: 5px solid #39E8F5;
		background-color: #39E8F5; 
		color: #0a0a0a;
		margin-left: 350px;
		margin-top: 80px;
		font-size: 30px;
		font-family: Segoe UI;
		text-align:center;
		padding-top: 5px;
		float: left;	

}	/*
.num{
	color:white;
	margin-left:600px;
	margin-bottom:500px;
}*/



a {
	text-decoration: none;
	color: white;
}

div.admin {
		width: 250px;
		height: 55px;
		border: 5px solid #FF3968;
		background-color: #FF3968; 
		color: white;
		margin-left: 400px;
		margin-top: 80px;
		font-size: 30px;
		font-family: Segoe UI;
		text-align:center;
		padding-top: 5px;
}
h2 {
	font-size: 30px;
	color: white;
	float: none;
	margin-top: 300px;
	text-align: centre;
	margin-left: 750px;
}	

</style>

</head>

<body>


<p style="margin-left:1200px;color:white;margin-top:100px">Currently there are <?php echo $quantity; ?> interviewees registered !<br>
Currently there are <?php echo $quantity1; ?> designers registered !
</p>

<img src="/images/logo.png" style="width:90px;height:90px;float:left">
<h1 style="margin-top:10px;margin-right:90px">Survey Up</h1>

<h1 style="color:yellow;font-size:25px;margin-top:20px">Find your desired users here!</h1>
<h2 style="padding-top:0px;margin-top:50px;margin-left:700px">LOGIN AS</h2>

<div ><a href=login.php>DESIGNER</a></div>

<div style="margin-left:300px" class="admin"><a href=login.php>INTERVIEWEE</div>

<h2 style="margin-left:670px" ><a href=act1.php>New? Sign up</a></h2>

</body>

</html>