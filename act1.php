<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<title>Registeration_form_1</title>
	<!--<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">-->
	
<script language="javascript">

function validate() 
{
	var name = document.getElementById("n").value;
	var email = document.getElementById("em").value;
	var cont = document.getElementById("ct").value;
	var p = document.getElementById("ph").checked;
	var r = document.getElementById("0").checked;
	var e = document.getElementById("1").checked;
	var g = document.getElementById("2").checked;
	
	if(name == null || name == "")
	{
		
		alert("please enter your name");
		//window.open('http://localhost/website/html/reg1.php','_parent');
		return false;
		document.getElementById("n").focus();
	}
	if(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(name))
			{
				
				alert("Cannot use a special character in the name!");
				return false;
				
			}
	if(email == null || email == "")
	{
		alert("please enter email");
		//window.open('http://localhost/website/html/reg1.php','_parent');
		return false;
		document.getElementById("em").focus();
	}
	if (cont == null || cont == "")
	{
  		alert("Please enter contact number");
		//window.open('http://localhost/website/html/reg1.php','_parent');
  		return false;
  		document.getElementById("ct").focus();
	}
    if(cont.length<10 || cont.length>10)
	{
		alert("contact no. cannot be of less/more than 10 digits.");
		//window.open('http://localhost/website/html/reg1.php','_parent');
		return false;
		document.getElementById("ct").focus();
	}
	if (dob == null || dob == "")
	{
  		alert("Please enter DOB");
		//window.open('http://localhost/website/html/reg1.php','_parent');
  		return false;
  		document.getElementById("d").focus();
	}
	if(r == false && e == false && g == false)
	{
		alert("please select the gender");
		//window.open('http://localhost/website/html/reg1.php','_parent');
		return false;
	}
	
}


</script>
	
</head>

<body >
<div class = "container-fluid">
	<div class = "header">


		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
              <a class="nav-link " href="homepage.php" tabindex="-1" ><b>Home</b></a>
            </li>
          </ul>
         
        </div>
      </nav>

</div>
</div>
<div class ="container-fluid">
<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12" style="background-color: #f1fa3c;height:680px;padding-top:15px">
	
		<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
				  </div>
				  <div class = "col-xl-4 col-lg-5 col-md-6 col-sm-7 col-xs-4" style="border:1px solid black;height:500px;background-color:white;box-shadow:
					10px 10px 10px gray;border-radius:20px;margin-top:5%;margin:0 auto">
					<h2 style="text-align:center;padding-top:29px;font-size:30px">1. Personal Details</h2>
	
	<form method="post" id="register" action="act3.php" name="reg" onsubmit="return validate();">
		
		<div class="register">
		
		<input class="form-control"style="border-radius:20px;margin-top:50px;border:2px solid lightgray"    type="text" name="Name" id="n" value="" placeholder="Enter your name">
		
		<input  class="form-control" style="border-radius:20px;margin-top:20px;border:2px solid lightgray"  type="email" name="Email" id="em" value="" placeholder="Enter your email">
		
		<select id="ph">
		<option>+91</option>
		<option>+11</option>
		<option>+9712</option>
        </select>
        
		<input  type="number" name="Cnum" id="ct" value=""  class="form-control" placeholder="Enter your contact num" style="border-radius:20px;margin-top:50pxpx;border:2px solid lightgray">
		
		<input  class="form-control" style="border-radius:20px;margin-top:20px;border:2px solid lightgray" id="d" value="" type="date" name="dob" >
        
        
		<select   style="border-radius:52px;margin-right:20px;
                             padding-top:2px;border:solid 2px lightgray;width:60%;margin-top:20px" type="text" name="cat"  id="ca" required>
		<option disabled selected>Select your account category</option>
        <option  title="A Designer gets the benefit to post surveys, access the repository to store their projects!" data-toggle="tooltip" data-placement="right" data-trigger="hover" id = "des">designer</option>
        <option title="An interviewee can earn rewards by answering surveys" data-toggle="tooltip" data-placement="right" data-trigger="hover">Interviewee</option>
		</select><br>
		
			<h2 id = "d" style="display:none">DANCE!</h2>

		<div class = "form-check-inline">

        <input type="radio" name="male" value="0" id="0"><span style="color: #FF3968;font-size: 20px" >&nbsp;Male</span>&nbsp;&nbsp;
		<input type="radio" name="male" value="1" id="1"><span style="color: #FF3968;font-size: 20px" >&nbsp;Female</span>&nbsp;&nbsp;
		<input type="radio" name="male" value="2" id="2"><span style="color: #FF3968;font-size: 20px" >&nbsp;Others</span>&nbsp;&nbsp;<br><br><br>
        </div>
		<input class="btn btn-success" type="submit" value="NEXT" id="sub" >
		
		
			
		
		
		</form>




</div>
	</div>
	<nav aria-label="..." class = "row">
		<div class = "col-xl-12 col-lg-10 col-md-8 d-none d-md-block">
  <ul class="pagination justify-content-end pagination-sm">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="act1.php">1<span class="sr-only">(current)</span></a></li>
    <li class="page-item">
      <a class="page-link" href="act3.php">2 </a>
    </li>
    <li class="page-item"><a class="page-link" href="act2.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="act3.php">Next</a>
    </li>
  </ul>
</div>
</nav>	
</div>

</div>


</body>
</html>

