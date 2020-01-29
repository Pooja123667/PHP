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
echo $result;



?>
<!doctype html>
<html>
<head>

    
<title>Des_landing_page</title>
<meta charset="utf-8">

	

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
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
<div class = container-fluid>
<div class = "row">
 <div class = "col-xl-6 col-lg-6 col-md-6" style="background-color: #f1fa3c;height:650px;padding-top:6%">
 <div class = "row">
      <div class = "col-xl-11 col-lg-11 col-md-11 col-sm-11 " id = "flip" style="background-color: #ffffff;height:50px;padding-top:10px;display:none;margin-left:1%;border-radius:10px;box-shadow:8px 8px 10px purple;margin-top:3%">
      <h3 style="text-align:center">Welcome, <?php echo $result; ?></h3> </div></div>
                <script>
                      $("document").ready(function(){
                          $("#flip").slideDown(500);
                      });
                  
                  
                  </script>
 
  

  <div class = "row">
    <div class = "col-xl-10 col-lg-11 col-md-12 col-sm-10">
  
    <div style="background-color:lightgray;height:300px;margin-left:1%;margin-top:5%;box-shadow:20px 20px 15px
        darkslategray;border-radius:20px">
          <div class = row>
              <div class = "col-xl-7 col-lg-10 col-md-8 col-sm-11">
                  <div class="btn-group dropright btn-lg">
                      <button type="button" class="btn btn-primary btn-lg">Make a survey</button>
                      <button type="button" class="btn btn-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                      <form action="postsurvey.php" method="POST"  class="dropdown-item" type="submit" name="check"><a href = "postsurvey.php"><u>Post a Survey</u></a><form>
                          
                          <div class="dropdown-divider"></div>
                          <form action="survey_results.php" class="dropdown-item" method="POST" type="submit" name="check"><a href="survey_results.php"><u>Survey History</u></a></form>
                      </div>
                  </div>
              </div>
              
     

               
                <div class = "col-xl-7 col-lg-10 col-md-8 col-sm-11" style="margin-top:10%">
                    <div class="btn-group dropright btn-lg">
                        <button type="button" class="btn btn-primary btn-lg">My Repository</button>
                        <button type="button" class="btn btn-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                        <form action="upload_design.php" method="POST" type="submit" name="check" class="dropdown-item"><a href="upload_design.php">Post your Design</a></form>
                            
                            <div class="dropdown-divider"></div>
                            <form action="design_history.php" method="POST"type="submit" name="check" class="dropdown-item" ><a href = "design_history.php">My Design history</a></form>
                        </div>
                    </div>
                </div>
               
    
    
         </div>
         
      </div>
      </div>
      </div>

      </div> <!--this is the div for closing of one half of page wala div-->


      <div class = "col-xl-6 col-lg-6 col-md-6" style="background-color: pink;height:650px;padding-top:6%"> <!--for the other half of page-->

          <div class ="row">     
          <div class = "col-xl-11 col-lg-11 col-md-11 col-sm-11 col-xs-11" style="background-color:darkslategray;height:50px;margin-left:4%;border-radius:10px;color:#ffffff;margin-top:1%">
          <h4 style="text-align:center">Here's, what you can do...</h4></div></div>

      <div class = row>
        <div class="card col-xl-5 col-lg-5 col-md-5 col-sm-5 " style="margin-top:4%;margin-left:6%">
          <div class="card-body">
            <h5 class="card-title" style="color:#000000">Make surveys</h5>
            <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>
            </div>
          </div>

        <div class="card col-xl-5 col-lg-5 col-md-5 col-sm-5 " style="margin-top:4%;margin-left:2%">
        <div class="card-body">
          <h5 class="card-title" style="color:#000000">Make surveys</h5>
          <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>
        </div>
        </div>
    </div><!--closing the first row-->

    <div class =row>
        <div class="card col-xl-5 col-lg-5 col-md-5 col-sm-5" style="margin-top:2%;margin-left:6%">
          <div class="card-body">
            <h5 class="card-title" style="color:#000000">Make surveys</h5>
            <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>  
          </div>
          </div>

        <div class="card col-xl-5 col-lg-5 col-md-5 col-sm-5" style="margin-top:2%;margin-left:2%">
              <div class="card-body">
                <h5 class="card-title" style="color:#000000">Make surveys</h5>
                <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>
              </div>
        </div>   
    </div> <!--closing the second row-->


    </div> <!--closing the pink half page div tag-->
  


      </div><!--closing the overall row for the page-->

  </div><!--container fluid closing tag-->
      
      






  





</body>
</html>