<?php

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Registeration_form_3
		<!--<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">-->
</title>
<style>
.register_3{
	width: 500px;
	height: 550px;
	border: 5px solid #39E8F5;
	background-color: transparent; 
	color: black;
	top: 50%;
	left:  50%;
	position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;	
	padding: 50px 30px;
	margin-top:80px;
	
}
</style>
	<script language="javascript">

function set() {
        var username = document.getElementById("usn").value;
		var password = document.getElementById("pw").value;
	    var repassword = document.getElementById("rpw").value;
		var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])(?!.*\s).{8,}$/;
		
		if(username == null || username == "")
			{
				alert("Username is empty");
				return false;
				document.getElementById("usn").focus;
			}
			
			if(username.length < 7)
			{
				alert("username should be minimum 7 characters");
				return false;
			}
			
			if(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(username))
			{
				
				alert("Cannot use a special character in the username!");
				return false;
				
			}
			
			if(password == null || password == "")
			{
				alert("Password is empty");
				return false;
				document.getElementById("pw").focus;
			}
			
			if(password.length < 8)
			{
				alert("password should be minimum 8 characters");
				return false;
			}
			
			if (!password.match(passw))
			{
				//return true;
				alert('Wrong...! password must contain uppercase, lowercase, number, special character')
				return false;
				document.getElementById("pw").focus;
			}
			
			
			
			
			if(repassword == null || repassword == "")
			{
				
				alert("Re-enter password field in empty !");
				return false;
				document.getElementById("rpw").focus;
			}
			
			if(repassword.length < 8)
			{
				alert("password should be minimum 8 characters");
				return false;
			}
			
			if(password==repassword){  
                  
				  return true;  
            }  

            else {  
                  alert("Both passwords must be same!");  
                  return false;  
                 }

}

function myFunction() {
  var x = document.getElementById("pw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1(){
	var y = document.getElementById("rpw");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>
</head>

<body >
	<div class = "container-fluid">
	<div class = "header">
        

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="homepage.php"><img src="\images\logo1.png" alt="main-logo" style="width:100px;height: 50px;border-radius: 18px;"></a>
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
            
            <li class="nav-item">
              <a class="nav-link " href="main-landing-page.html" tabindex="-1" ><b>LOGIN</b></a>
            </li>
          </ul>
         
        </div>
      </nav>
         </div>
	</div>
	
	<div class="container-fluid">
	<div class = col-xl-12 style="background-color: #f1fa3c;height:680px;padding-top:15px">
                  <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
				  </div>
				  <div class = "col-xl-4 col-lg-5 col-md-6 col-sm-7 col-xs-4" style="border:1px solid black;height:500px;background-color:white;box-shadow:
                    10px 10px 10px gray;border-radius:20px;margin:0 auto">
                    <h2 style="text-align:center;padding-top:29px;font-size:30px">3. Set login Details</h2>
	<form method="post" action="act4.php" name="formx">
	
	
		<input class="form-control" placeholder="Set your username" style="border-radius:20px;margin-top:50px;border:2px solid lightgray" type="text" name="username" id="usn" placeholder="Set Username">
		<script>
		$(document).ready(function(){
				$("#usn").focus(function(){
					$("#s1").css("display", "inline").fadeOut(2000);
				});

				$("#pw").click(function(){
					$("#s2").css("display", "inline").fadeOut(2000);
					//alert("password must be minimum 8 characters.Must have one uppercase,lowercase,special character and number")
				});
				$("#rpw").focus(function(){
					$("#s3").css("display", "inline").fadeOut(2000);
				});


				});
		
		</script>
		<span style="display:none;font-size:12px;color:red" id="s1">Must have <b>minimum 7 characters</b> and <b>no </b>special characters</span>
	
	
	
		<input class="form-control" placeholder="Set your password" style="border-radius:20px;margin-top:50px;border:2px solid lightgray;width:50%" type="password" name="pass" id="pw" placeholder="password">
		<span style="display:none;font-size:10px;color:red" id="s2">Must be minimum <b>8 characters.</b>Must have one <b>uppercase,lowercase,special character and number</b></span>
	
	<div class=row>
	<input style="float: left;margin-left: 250px; margin-bottom: 0px" type="checkbox" id="jj" onclick="myFunction()"> 
	<label style="margin-left:270px; color: black; font-size: 15px">
	Show password</label>
</div>
	
	
		<input class="form-control" placeholder="Re-enter your password" style="border-radius:20px;margin-top:20px;border:2px solid lightgray;width:50%" type="password" name="repass" id="rpw" placeholder="re-enter password">
		<span style="display:none;font-size:10px;color:#000000" id="s3">Make sure both your passwords are same!</b></span>
	<div class=row>
	<input style="float: left;margin-left: 250px; margin-bottom: 0px" type="checkbox" id="jf" onclick="myFunction1()">
	
	<label style="margin-left:20px; color: black; font-size: 15px">
     
	Show password</label>
	</div>
    
    <input type="hidden" value="<?php echo $_POST['Name'] ?>" name="Name" >
         <input type="hidden" value="<?php echo $_POST['Email'] ?>" name="Email">
         <input type="hidden" value="<?php echo $_POST['Cnum'] ?>" name="Cnum">
         <input type="hidden" value="<?php echo $_POST['DOB'] ?>" name="DOB">
         <input type="hidden" value="<?php echo $_POST['male'] ?>" name="male">
         <input type="hidden" value="<?php echo $_POST['cat'] ?>" name="cat">
         <input type="hidden" value="<?php echo $_POST['edu'] ?>" name="edu">
         <input type="hidden" value="<?php echo $_POST['occup'] ?>" name="occup">
         <input type="hidden" value="<?php echo $_POST['Int'] ?>" name="Int">
	
	<input class="btn btn-success" type="submit" style="margin-left:200px"value="SUBMIT" id="sub" onClick="return set(this.form)">
</form>
</div>
<nav aria-label="...">
  <ul class="pagination justify-content-end pagination-sm">
    <li class="page-item ">
      <a class="page-link" href="act3.php" tabindex="-1">Previous</a>
    </li>
    <li class="page-item "><a class="page-link" href="act1.php">1</a></li>
    <li class="page-item ">
      <a class="page-link " href="act3.php">2 </a>
    </li>
    <li class="page-item active"><a class="page-link" href="act2.php">3<span class="sr-only">(current)</span></a></li>
    <li class="page-item disabled">
      <a class="page-link" href="act2.php">Next</a>
    </li>
  </ul>
</nav>
</div>

</div>
</div>
	
	
</body>
</html>





