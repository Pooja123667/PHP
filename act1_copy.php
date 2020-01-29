<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registeration_form_1</title>
	<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">
	<script language="javascript">
	
		function validity()
		{
			var name1=document.getElementById('name').value;
			if(name1="" || name1="null")
			{
				alert("name field is empty please enter name");
				return false;
				document.getElementById("name").focus;
			}

					}

					/*function validity(){
			
			var name = document.getElementById("name").value;
			var em = document.getElementById("email").value;
			var r = document.getElementById("male1").checked;
			var s = document.getElementById("male2").checked;
			var t = document.getElementById("male3").checked;

			if(name="" || name="null")
			{
				alert("name field is empty please enter name");
				return false;
			}
			
			if(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(name))
			{
				
				alert("Cannot use a special character in the name!");
				return false;
				
			}

			if( s == false && t == false && r == false)
				{
					alert("select a button");
					return false;
					//document.forms.focus();
				}
			
		}*/
					</script>
	
	
		
		
	
	
	<style>
.register
{
	width:520px;
	height:600px;
	margin-top:220px;
}

		</style>
	
	
</head>

<body style="background-color: #141314">
	
	<h1 style="text-align: center; color: #FFFFFF;font-size: 70px">Registration </h1>
	<h2 style="text-align: center; color: #EFF283;font-size: 40px">1. Personal details</h2>
	<div class="register">
	<form name="forms" method="post" action="act3.php">
		
		
		
		<label style="color: #ffffff;font-size: 20px"> Name :</label>
		<input style="font-size:30px" type="text" name="Name" id="name" placeholder="Enter your name" ><br><br><br>
		
		<label style="color: #ffffff;font-size: 20px">Email :</label>
		<input style="font-size:30px" type="email" name="Email" id="email" placeholder="Enter your email" ><br><br><br>
		<label style="color: #ffffff;font-size: 20px">Contact :</label>
		<select id="ph">
		<option>+91</option>
		
		</select>
		<input style="font-size:20px" type="number" name="Cnum" id="num" placeholder="Enter your contact num" ><br><br><br>
		<label style="color: #ffffff;font-size: 20px">DOB :</label>
		<input style="font-size:20px" type="date" name="DOB"><br><br><br>

		<label style="color: white; float: left; font-size: 20px;">Select account category :</label>	
		<select name="cat" id="ac" style="margin:0px 600px 50px 150px "required>
			
		<option value="">select category</option>
		<option>designer</option>
		<option>Interviewee</option>
		<input type="radio" name="male" value="0" id="male1"><span style="color: #EFF283;font-size: 20px" id="m1">&nbsp;Male</span>&nbsp;&nbsp;
		
		<input type="radio" name="male" value="1" id="male2"><span style="color: #EFF283;font-size: 20px" id="m2">&nbsp;Female</span>&nbsp;&nbsp;
		
		<input type="radio" name="male" value="2" id="male3"><span style="color: #EFF283;font-size: 20px" id="m3">&nbsp;Others</span>&nbsp;&nbsp;<br><br><br>
		
		<input type="submit" value="NEXT" id="sub" onClick="return validity(this.form)">
				
		
		</form>
	</div>
</body>


					
</html>
