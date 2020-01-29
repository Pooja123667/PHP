<?php
/*$education = $_POST["edu"];
$occupation = $_POST["occup"];
$interest = $_POST["Int"];*/

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<title>Registeration_form_2</title>
	<!--<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">-->
	<style>
	.qualify{
		width:500px;
	}
	</style>
	<script language="javascript">
	function validate_qualification()
		{
		
		var interests = document.getElementById("int").value;
		
		
		 if(interests == null || interests == "")
			{
				alert("Interest field is empty");
				return false;
				document.getElementById("int").focus;
			}
			else{
				return true;
			}
		}
	
	</script>
</head>

<body>
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
              <a class="nav-link " href="homepage.php" tabindex="-1" ><b>HOME</b></a>
            </li>
          </ul>
         
        </div>
      </nav>

    


	 </div>
	</div>
	
	<div class="container-fluid">
	<div class = col-xl-12 style="background-color: #f1fa3c;height:680px;padding-top:15px">
                  <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                  </div>
                  <div class = "col-xl-4 col-lg-5 col-md-6 col-sm-7 col-xs-4"  style="border:1px solid black;height:500px;background-color:white;box-shadow:
					10px 10px 10px gray;border-radius:20px;margin-top:5%;margin:0 auto">
					 <h2 style="text-align:center;padding-top:29px;font-size:30px">2. Qualification</h2>
		<form name="form" action="act2.php" method="post">
	
		
			
		
		<select  class="custom-select" name="edu" id="gb" style="border-radius:52px;margin-right:20px;
                             padding-top:2px;border:solid 2px lightgray;margin-top:50px" required>
		<option value="">select an option (Education)</option>
		<option>10th pass</option>
		<option>12th pass</option>
		<option>Graduation</option>
		<option>Degree</option>
		<option>Post-graduation</option>
		</select>

			
		<select style="border-radius:52px;margin-right:20px;
                             padding-top:2px;border:solid 2px lightgray;margin-top:40px"  class="custom-select" name="occup" id="go" style="margin:0px 600px 50px 150px " required>
		<option value="">Select your option (Occupation)</option>
		<option>Business</option>
		<option>Self Employeed</option>
		<option>Student</option>
		<option>Entrepreneur</option>
		<option>Free Lancer</option>
		<option>Engineer</option>
		<option>Designer</option>
		<option>Teacher</option>
		<option>Doctor</option>
		<option>Scientist</option>
		</select>
		
			
			
	
	
        <input  class="input-group mb-3" style="border-radius:52px;margin-right:20px;margin-top:35px;
                             padding-top:2px;border:solid 2px lightgray;height:40px;padding-left:10px"
         type="text" name="Int" id="int" placeholder="List your interests" value="">

         <input type="hidden" value="<?php echo $_POST['Name'] ?>" name="Name" >
         <input type="hidden" value="<?php echo $_POST['Email'] ?>" name="Email">
         <input type="hidden" value="<?php echo $_POST['Cnum'] ?>" name="Cnum">
         <input type="hidden" value="<?php echo $_POST['DOB'] ?>" name="DOB">
         <input type="hidden" value="<?php echo $_POST['male'] ?>" name="male">
         <input type="hidden" value="<?php echo $_POST['cat'] ?>" name="cat">
	<input   class="btn btn-success" style="margin-left:200px;margin-top:50px" type="submit" value="NEXT" id="sub" onClick="return validate_qualification(this.form)">
			</form>
			</div>
			<nav aria-label="...">
  <ul class="pagination justify-content-end pagination-sm">
    <li class="page-item ">
      <a class="page-link" href="act1.php" tabindex="-1">Previous</a>
    </li>
    <li class="page-item "><a class="page-link" href="act1.php">1</a></li>
    <li class="page-item active">
      <a class="page-link " href="act3.php">2<span class="sr-only">(current)</span> </a>
    </li>
    <li class="page-item"><a class="page-link" href="act2.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="act2.php">Next</a>
    </li>
  </ul>
</nav>
	</div>
	</div>	
</body>
</html>
