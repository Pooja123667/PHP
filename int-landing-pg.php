<?php

session_start();

$test=  $_SESSION['uid1'];
  echo $test;
global $test;


if(isset($_POST['check']))
{
  
  $conn = mysqli_connect("localhost", "root", "", "project");

  $sql = "SELECT * FROM sur_int";
  $run = mysqli_query($conn, $sql);
  
  while($result = mysqli_fetch_assoc($run))
  {
      $res = $result['int_fk'];
     // echo $res;
  }

  if($_SESSION['uid1'] == $res)
  {
    echo "checking";
    header("location: interviewee_form.php");
  }

  else
  {
    header("location: nosurvey.php");
    echo "no suvey for u !!";
  }
  
}

if(isset($_SESSION['uid1']))
{
  //$test= echo $_SESSION['uid1'];
//header('location: interviewee.php');

}
 

?>

<?php

$conn = mysqli_connect("localhost", "root", "", "project");
$query = "SELECT * FROM interviewee  where int_id = $test";
$run = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($run);
$name = $result['int_name'];

?>

<!doctype html>
<html>
<head>
    
<title>Int_landing_page</title>
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

 <div class = "col-xl-6 col-lg-6 col-md-6" style="background-color: lightgray;height:650px;padding-top:6%">
 <div class = "row">
  <div class = "col-xl-11 col-lg-11 col-md-11 col-sm-11 " id = "flip" style="background-color: #ffffff;height:50px;padding-top:10px;display:none;margin-left:1%;border-radius:10px;box-shadow:8px 8px 10px purple;margin-top:3%">
  <h3 style="text-align:center">Welcome, <?php echo $name; ?></h3></div></div>
    <script>
        $("document").ready(function(){
            $("#flip").slideDown(500);
        });
    
    
     </script>


<div class=row>
<div class = "col-xl-10 col-lg-11 col-md-12 col-sm-10">


<div style="background-color:#f1fa3c;height:300px;margin-left:1%;margin-top:5%;box-shadow:20px 20px 20px
 purple;border-radius:20px">
 <div class = row>
     <div class = "col-xl-7 col-lg-10 col-md-8 col-sm-11">
        <div class="btn-group dropright btn-lg">
            <button type="button" class="btn btn-primary btn-lg">My Surveys</button>
            <button type="button" class="btn btn-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
            <form action="int-landing-pg.php" method="post"><button class="btn dropdown-item" name="check">Answer a Survey</button></form>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"> My Survey History</a>
            </div>
        </div>
    </div>


    <div class = "col-xl-7 col-lg-10 col-md-8 col-sm-11" style="margin-top:10%">
        <div class="btn-group dropright btn-lg">
            <button type="button" class="btn btn-primary btn-lg">Rewards</button>
            <button type="button" class="btn btn-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="upload_design.php">Balance</a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">My Designs</a>
            </div>
        </div>
    </div>
    
    
    </div>
   </div>
  </div>
 </div>
 </div>



 <div class = "col-xl-6 col-lg-6 col-md-6" style="background-color: pink;height:650px;padding-top:6%"> <!--for the other half of page-->
 <div class = "row">
 <div class = "col-xl-11 col-lg-11 col-md-11 col-sm-11 col-xs-11" style="background-color:darkslategray;height:50px;margin-left:4%;border-radius:10px;color:#ffffff;margin-top:1%">
 <h3 style="text-align:center">Here's, what you can do...</h3>

 <div class = row>

 <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-6 " style="margin-top:4%">
  <div class="card-body">
    <h5 class="card-title" style="color:#000000">Answer Surveys</h5>
    <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>
    
    </div>
   </div>

   <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-6" style="margin-top:4%">
   <div class="card-body">
    <h5 class="card-title" style="color:#000000">Make Money</h5>
    <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>
    
   </div>
   </div>

</div>
<div class =row>
<div class="card col-xl-6 col-lg-6 col-md-6 col-sm-6" style="margin-top:4%">
   <div class="card-body">
    <h5 class="card-title" style="color:#000000">Share your experience</h5>
    <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>

       
   </div>
   </div>

   <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-6" style="margin-top:4%">
   <div class="card-body">
    <h5 class="card-title" style="color:#000000">Make connections</h5>
    <p class="card-text"style="color:#000000">Here you can make and post useful surveys to your dezired users!</p>
    
   </div>
   </div>

   

</div>
    </div>
 </div>   
 </div>
</body>
</html>