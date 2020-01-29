<?php
session_start(); //to check the session

if(isset($_SESSION['uid'])) //if that variable consists the value...if true then direct it to next page!
{

header('location: designer_landing_page.php');  ///earlier was header
}
elseif(isset($_SESSION['uid1']))
{
	header('location:interviewee_landing_page.php');

}
elseif(isset($_SESSION['uid2']))
{
	header('location:admin.php');
}



?>

<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">
		
</head>
<style>
.loginbox{
	height:580px;
	width:350px;
}


</style>

<body>
	
	
	<div class="loginbox">
<img src="/images/about me.png" alt="abtme" class="aboutme"/>
<h1 style="text-align:center">Login here</h1>

<form action="" method="post" id="form1">

<p>Username</p>
<input type="text" name="name" id="name1" placeholder="Enter Username" value="" >

<p>Password</p>
<input type="password" name="pass" id="pass1" placeholder="Enter Password" value="" ><br>

<label style="color: black; float: left; font-size: 20px">Login as :</label>
<div class="select">	
		<select name="cat" id="ac" style="margin:0px 600px 50px 150px " required>
		</div>
			
		<option>Select your option</option>
		<option>designer</option>
		<option>Interviewee</option>
		<option>admin</option><br>
		

<input style="margin-bottom:20px" type="submit" value="login" name="Login" onClick="validate()">
<p id="demo"></p>	
	
<!--<a style=mar href="">Lost your password?</a><br>-->
<a href="act1.php">Don't have an account? Click here</a>

</form>
	</div>	
</body>
</html>
    
<?php

$conn =  mysqli_connect('localhost','root','','project');


//$test = $_POST['Login'];
//echo $test;
if(isset($_POST['Login']))

{
	
    $username = $_POST['name'];
	$password = $_POST['pass'];
	$category = $_POST['cat'];
	if($_POST['cat']=='designer')
	{

	echo $username;
	echo $password;
	$qry = "SELECT `des_id` FROM `designer` WHERE `des_username` = '$username' AND `des_password` = '$password';";
	//$qry .= "SELECT `int_id` FROM `interviewee` WHERE `int_username` = '$username' AND `int_password` = '$password';";
	//$run = mysqli_multi_query($conn, $qry);
	$run = mysqli_query($conn, $qry);///changes done in 107,106
	//$data = mysqli_fetch_assoc($run);
	$row = mysqli_num_rows($run); ///made different variables for the 2 queries
	


    if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('login.php','_self');
		</script>
		<?php
		
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['des_id'];
		session_start();   ///starts the new session
		$_SESSION['uid'] =$id; 
		header('location: designer_landing_page.php');
		
        
	}
}
elseif($_POST['cat']=='Interviewee')
{
	echo $username;
	echo $password;
	$qry = "SELECT `int_id` FROM `interviewee` WHERE `int_username` = '$username' AND `int_password` = '$password';";
	$run = mysqli_query($conn, $qry);
	$row = mysqli_num_rows($run);

	if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('login.php','_self');
		</script>
		<?php
		
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['int_id'];
		session_start();   ///starts the new session
		$_SESSION['uid1'] =$id; 
		header('location: interviewee_landing_page.php');
		
        
	}
}
	else
	{
	$qry = "SELECT `ad_id` FROM `admin` WHERE `ad_username` = '$username' AND `ad_password` = '$password';";
	$run = mysqli_query($conn, $qry);
	$row = mysqli_num_rows($run);

	if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('login.php','_self');
		</script>
		<?php
		//echo "start";
		//echo $id;
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['ad_id'];
		session_start();   ///starts the new session
		$_SESSION['uid2'] =$id; 
		header('location: admin.php');
		
        
	}


	}


}

?> 






