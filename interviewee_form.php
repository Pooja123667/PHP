<?php
session_start();
$test = $_SESSION['uid1'];
echo $test;


$conn = mysqli_connect('localhost','root','','project');




//$qry = "SELECT * FROM sur_int si, survey s where si.survey_fk = s.survey_id AND int_fk = '$test'";

	$qry = "SELECT * FROM survey INNER JOIN sur_int on survey.survey_id = sur_int.survey_fk WHERE int_fk = '$test'";
	echo $qry;
	$run = mysqli_query($conn, $qry);
	
	$result=mysqli_fetch_assoc($run);

		$que1 = $result['question1'];
		echo $result;
		

		$que2 = $result['question2'];
		
if(isset($_POST['submit1']))
{
$a1 = $_POST['ans'];
echo $a1;

$a2 = $_POST['ans1'];
echo $a2;
$conn = mysqli_connect('localhost','root','','project');

$query = "UPDATE sur_int set answer1='$a1', answer2='$a2' where int_fk='$test'";
$run1 = mysqli_query($conn,$query);
header('location: int-landing-pg.php');
}




?>
<!doctype html>
<head>

<title>Interviewee survey</title>

<!--<link rel="stylesheet" type="text/css" href="/css/interstyle.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php

	echo "dance";
	?>
	
<script>
function validate_answers()
		{
		var answer1 = document.getElementById("desc").value;
		var answer2 = document.getElementById("desc1").value;
		
		
		 if(answer1 == null || answer1 == "")
			{
				alert("Answer 1 is empty. Please enter your answer");
				return false;
				document.getElementById("desc").focus;
			}
			else if(answer2 == null || answer2 == "")
			{
				alert("Answer 2 is empty. Please enter your answer");
				return false;
				document.getElementById("desc1").focus;
			}
			else if(answer1.length<30)
			{
				alert("Answer1 must have a minimum of 30 characters");
				return false;
				document.getElementById("desc").focus;
			}
			else if(answer2.length<30)
			{
				alert("Answer2 must have a minimum of 30 characters");
				return false;
				document.getElementById("desc1").focus;
			}
			
		}
	


</script>

</head>

<body style="background-color: #f1fa3c">
<div class = "container-fluid">
   <div class = "header">
       
      
      
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
            
            <li class="nav-item">
              <a class="nav-link " href="logout.php" tabindex="-1" ><b>LOGOUT</b></a>
            </li>
          </ul>
         
        </div>
      </nav>
   
      
  
</div> 
</div>

<form method="POST" id="register" action="#"  name="formz"onSubmit="return validate_answers();" >
	<div class = "container-fluid">
<div class="col-xl-12" style="margin-top:3%"><h2 style="text-align: center; color: #000000;font-size: 30px;">Give a survey</h2></div>

		<div class = row>
		<div class="col-xl-8" style="border:3px solid black;margin-top:3%;box-shadow:5px 5px 10px purple;">
		
		<label style="color: #000000; font-size: 20px"> Question :<?php echo $que1;?></label><br>
		<!--<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q1"  id="ques" value=<?php //echo $que1?> placeholder="Enter your q"><br><br><br>-->
		
		<label style="color: #000000;font-size: 20px;">Answer :</label>
		<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12"><textarea type="text" id="desc" name="ans" required style="border 1px white" cols="100" rows="4">
		
		</textarea></div>
 		</div>
			 
		 <div class="col-xl-8" style="border:3px solid black;margin-top:3%;box-shadow:5px 5px 10px purple;background-color:lightgray">
		 <div class="question1" id="add">
		
			<label style="color: #000000; font-size: 20px"> Question : <?php echo $que2;?></label><br>
			<!--<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q2" id="ques1" value="<?php //echo $que2; ?>"><br><br><br>-->
			
			<label style="color: #000000;font-size: 20px;">Answer:</label>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><textarea type="text" id="desc1" name="ans1" required style="border 1px white" cols="100" rows="4">
			
			</textarea></div>
			</div>
			</div>
			</div>

			<button  class = "btn btn-success btn-lg"  type="submit" name="submit1" method="POST" > SUBMIT</button>
            
		
	
	
        </body>
</html>