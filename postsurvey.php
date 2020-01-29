<!DOCTYPE html>

<html>

<head>

<title>Make a survey</title>

<!--<link rel="stylesheet" type="text/css" href="/css/interstyle.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body style="background-color: #f1fa3c">

<!--<h1 style="text-align: center; color: #FFFFFF;font-size: 50px; padding-top: 10px;">Surveys </h1>-->
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
<div class ="container-fluid">

            <div class = "row">
            <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top:100px"> <!--for the heading space-->
            <h2 style="color: #000000;font-size: 40px;">Make a survey</h2><br>
            </div>
            </div>
</div>


<div class="container-fluid">
    <div class = "row"> <!--first row starts-->
        <div class = "col-xl-5 col-lg-5 col-md-5" style="border:2px solid darkslategray;box-shadow:10px 10px 10px purple ;margin-left:5%">

        <form method="post" id="register" action="filter_result.php" onSubmit="alert('survey created successfully!');">
        
          <div class="question">
          <label style="color: #000000; font-size: 20px"> Question :</label>
          <input style="color: #000000; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q1" id="ques" placeholder="Enter first question"><br><br><br>
          
          <label style="color: white;font-size: 20px;">Answer :</label>
          <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 0px;" type="hidden" name="ans" id="desc" placeholder="Add description"><br><br><br>
          </div>
          
        
          <div class="question1" id="add">
          <label style="color: #000000; font-size: 20px"> Question :</label>
          <input style="color: #000000; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="q2" id="ques1" placeholder="Enter second question"><br><br><br>
          
          <label style="color: white;font-size: 20px;">Answer:</label>
          <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 0px;" type="hidden" name="ans1" id="desc1" placeholder="Add your answer"><br><br><br>
          </div>

       </div>

           <!-- this part of form is for gender filter -->
<div class = "col-xl-6 col-lg-6 col-md-6" style="border:solid 5px lightgray;box-shadow:10px 10px 5px darkslategray;">
<div class = "row col-xl-12"><h2 style="text-align:center;margin:0 auto">who is your</h2></div>
<div class="row col-xl-12" ><h2 style="text-align:center;margin:0 auto"> <b>Target Audience ?</b></h2></div>
<div class = row style="border:solid 3px lightgray;margin-top:10px">

        <div style="color: black; margin-left: 10%;" >
            <p style="padding-top: 0px;"> <b>Filter by gender -</b> </p>
                <!--<input type ="checkbox" name="male[]" id="m1" value="0">Male</input>
                <input type ="checkbox" name="male[]" id="m2" value="1">Female</input>
                <input type ="checkbox" name="male[]" id="m3" value="2">others</input><br><br>-->
                
                <label class="radio-inline"><input value="0" type="radio" name="male[]" checked>Male</label>
                <label class="radio-inline"><input  value="1" type="radio" name="male[]">Female</label>
                <label class="radio-inline"><input  value="2" type="radio" name="male[]">Others</label>
        </div>

</div>

 
 
         <!-- filter for education -->
    <div class = row style="border:solid 3px lightgray;">
         <div style="color: black; margin-left: 10%;">
            <p><b>Filter by qualification-</b></p>
            <!--<select name="choice">
            <option>10th pass</option>
            <option>12th pass</option>
            <option>Graduation</option>
		    <option>Degree</option>
		    <option>Post-graduation</option>
            </select><br><br>-->
            
  <div class="input-group mb-3" style="padding-top:10px">
                             <select class="custom-select"  style="border-radius:52px;
                             padding-top:2px;border:solid 2px gray" name="choice" required>
                                <option disabled selected>Select an option</option>
                                    <option>10th pass</option>
                                        <option>12th pass</option>
                                        <option>Graduation</option>
                                        <option>Degree</option>
                                        <option>Post-graduation</option>
                             </select>
                            
                             </div>


        </div>
    </div>

    <div class = row style="border:solid 3px lightgray;">
        <!-- filter by occupation-->
        <div style="color: #000000; margin-left: 10%;">
        <p>Filter by occupation-</p>
        <!--<select name="choice1">
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
		</select><br><br><br>--><div class="input-group mb-3" style="padding-top:10px">
                             <select class="custom-select"  style="border-radius:52px;
                             padding-top:2px;border:solid 2px gray" name="choice1" required>
                                <option disabled selected>Select an option</option>
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
                            
                             </div>

        </div>
</div>
       

         <button class = "btn btn-success btn-lg" style="margin-bottom: 10px;padding-top:15px weight: 200px; width:150px;height:80px; border-radius: 10%; margin-left:45%" type="submit" name="search1"><strong>POST</strong></button>
        </form>  
        </div>
</div>
</div>      
</body>
</html>





        