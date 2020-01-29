<?php
session_start(); //to check the session

$test=  $_SESSION['uid'];
  //echo $test;
global $test;



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
<title>Survey results</title>
	<!--<link rel="stylesheet" type="text/css" href="/css/stylez.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body style="background-color: #f1fa3c">
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
            
            <li class="nav-item">
              <a class="nav-link " href="logout.php" tabindex="-1" ><b>LOGOUT</b></a>
            </li>
          </ul>
         
        </div>
      </nav>
</div>
 

</div>

	
			
		
	
			<div class ="banner_des">
                <div class = "col-xl-12" style="margin-top:5%;text-align:center"><h1 style="color:#000000">Survey Results</h1></div>

			<?php

			$conn = mysqli_connect("localhost", "root", "", "project");
			$query = "SELECT * FROM designer  where des_id = $test";
			$run = mysqli_query($conn, $query);
			$result = mysqli_fetch_assoc($run);
            $name = $result['des_name'];
            /*
            
            $qry = "SELECT COUNT(`int_fk`) FROM `sur_int` INNER JOIN `survey` ON sur_int.survey_fk=survey.survey_id WHERE sur_int.answer1 != '' AND sur_int.answer2 != '' AND survey.des_fk='$test'"; //cross join query
            //echo $qry;
            $run = mysqli_query($conn, $qry);
            $rez=mysqli_fetch_assoc($run);
            //echo intval($rez);


            $qry1 = "SELECT COUNT(`int_fk`) FROM `sur_int` INNER JOIN `survey` ON sur_int.survey_fk=survey.survey_id WHERE sur_int.int_fk IN (SELECT int_id FROM `interviewee` WHERE `int_gen`=0)
            AND sur_int.answer1 != '' AND sur_int.answer2 != '' AND survey.des_fk='$test'"; //nested query
            $run1 = mysqli_query($conn, $qry1);
            $rez1=mysqli_fetch_assoc($run1);


            $qry2 = "SELECT COUNT(`int_fk`) FROM `sur_int` INNER JOIN `survey` ON sur_int.survey_fk=survey.survey_id WHERE sur_int.int_fk IN (SELECT int_id FROM `interviewee` WHERE `int_gen`=1)
            AND sur_int.answer1 != '' AND sur_int.answer2 != '' AND survey.des_fk='$test'"; //nested query
            $run2 = mysqli_query($conn, $qry2);
            $rez2=mysqli_fetch_assoc($run2);
            */

			?>

            <!--
            <h3 style="color:white"> The number of interviewees who answered both your questions are <?php //echo intval($rez); ?> </h3>
            <h3 style="color:white"> The number of male interviewees who answered both your questions are <?php //echo intval($rez1); ?> </h3>
            <h3 style="color:white"> The number of female interviewees who answered both your questions are <?php //echo intval($rez2); ?> </h3>-->
            </div>

         <?php   global $conn;

            $query =  "SELECT * FROM sur_int si, survey s where si.survey_fk = s.survey_id and des_fk = '$test' and si.answer1 != ''";
            
            //$query =  "SELECT * FROM  survey where des_fk = '$test'";
            $run = mysqli_query($conn, $query);

            if($query == true)
            {
                ?>
            <table  class="table table-dark table-hover col-xl-12" cellpadding="10" cellspacing="5" border=1px; style="color: white;margin-top:5%">
            <tr><td>Question1</td>
            <td>Answer1</td>
            <td>Question2</td>
            <td>Answer2</td></tr>

            <?php while($data = mysqli_fetch_assoc($run))
            {
                ?> 
                <tr><td> <?php echo $data['question1'];?></td>
                <td><?php echo $data['answer1'];?></td>
                <td> <?php echo $data['question2'];?></td>
                <td> <?php echo $data['answer2'];?></td></tr>
                <?php
            }
                 ?>
                </table>
                <?php
                }
                ?>
                
                
            
</body>
</html>
