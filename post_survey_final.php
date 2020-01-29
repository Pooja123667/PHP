<!DOCTYPE html>

<html>

<head>

<title>Make a survey</title>

<link rel="stylesheet" type="text/css" href="/css/interstyle.css">



</head>

<body style="background-color: #141314; color:white">

<h1 style="text-align: center; color: #FFFFFF;font-size: 50px; padding-top: 10px;">Surveys </h1>

<h2 style="text-align: center; color: #EFF283;font-size: 30px; padding-top: 0px;">Make a survey</h2>


<form method="post" id="register" action="">
		

		 <div class="question">
		
			<label style="color: white; font-size: 20px"> Question :</label>
			<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="Name" id="name" placeholder="Enter question here"><br><br><br>
			
			<label style="color: white;font-size: 20px;">Answer:</label>
			<input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 0px;" type="text" name="Desc" id="desc" placeholder="Add your answer"><br><br><br>
            </div>
            
        <div class="question1">
		
        <label style="color: white; font-size: 20px"> Question :</label>
        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white;" type="text" name="Name1" id="name1" placeholder="Enter question here"><br><br><br>
        
        <label style="color: white;font-size: 20px;">Answer:</label>
        <input style="color: white; font-size: 20px; background-color: transparent; border: none; outline: none; border-bottom: 2px solid white; padding-top: 0px;" type="text" name="Desc1" id="desc1" placeholder="Add your answer"><br><br><br>
        
        </div>
        

    </form>
   

        <!-- this part of form is for gender filter -->

        <form action="post_survey_final.php" method="POST">
            <p style="margin-left:1200px;margin-top:130px"> Filter by gender - </p>
            <div style="margin-left:1200px">
                <input type ="radio" name="male" id="m1">Male</input>
                <input type ="radio" name="male1" id="m2">Female</input>
                <input type ="radio" name="male2" id="m3">others</input><br><br>
                <!--<input type="submit" name="search1" value="Search"/><br>-->
    </div>
        
<div style="margin-left:1200px">
       <?php
       if(isset($_POST['search1']))
       {

       
       
if(isset($_POST['male']))
{
    $connect = mysqli_connect("localhost", "root", "", "project");
    $qry1 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_gen`='m'";
    $filter_Result1 = mysqli_query($connect, $qry1);
     $row = mysqli_fetch_array($filter_Result1);
     $quantity = $row[0];?><br><?php
     //echo ("The number of interviewees are "  .$quantity);
    

}
elseif(isset($_POST['male1']))
{ 
    $connect = mysqli_connect("localhost", "root", "", "project");
    $qry2 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_gen`='f'";
    $filter_Result2 = mysqli_query($connect, $qry2);
    $row1 = mysqli_fetch_array( $filter_Result2);
    $quantity=$row1[0];?><br><?php

}
else{
    
    $connect = mysqli_connect("localhost", "root", "", "project");
    
    
    $qry2 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_gen`='o'";
    $filter_Result3 = mysqli_query($connect, $qry2);
    $row2 = mysqli_fetch_array($filter_Result3);
    $quantity = $row2[0];?><br><?php

}
       }

        ?>
        </div>
        <!--</form>-->

        <!-- form for the age-->
        <form action="post_survey_final.php" method="POST">
            <p style="margin-left:1200px"> Filter by age - </p>
            <div style="margin-left:1200px">
                <input type ="radio" name="age1" id="a1">15-20 yrs</input>
                <input type ="radio" name="age2" id="a2">21-30 yrs</input>
                <input type ="radio" name="age3" id="a3">31-40 yrs</input><br><br>
                <!--<input type="submit" name="search2" value="Search"/><br>-->
    </div>
                <div style="margin-left:1200px">

            <?php
            
            if(isset($_POST['search1']))
            {
            if(isset($_POST['age1']))
            {
                
                    $connect = mysqli_connect("localhost", "root", "", "project");
                    $qry3 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_dob` BETWEEN '1999-01-01' AND '2004-12-30'";
                    $filter_Result4 = mysqli_query($connect, $qry3);
                    $rowa = mysqli_fetch_array( $filter_Result4);
                    $quantity1=$rowa[0];?><br><?php
                    //echo ("The number of interviewees are "  .$quantity1);
                   
                    
                
                
            }
            elseif(isset($_POST['age2']))
            {
               
                $connect = mysqli_connect("localhost", "root", "", "project");
                $qry3 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_dob` BETWEEN '1988-01-01' AND '1998-12-30'";
                $filter_Result5 = mysqli_query($connect, $qry3);
                $rowb = mysqli_fetch_array( $filter_Result5);
                $quantity1=$rowb[0];?><br><?php
                //echo ("The number of interviewees are "  .$quantity1);
                
                
               // echo intval( $filter_Result4); 
            }
            else{
               
                $connect = mysqli_connect("localhost", "root", "", "project");
                $qry3 = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_dob` BETWEEN '1977-01-01' AND '1987-12-30'";
                $filter_Result6 = mysqli_query($connect, $qry3);
                $rowc = mysqli_fetch_array( $filter_Result6);
                $quantity1=$rowc[0];?><br><?php
                //echo ("The number of interviewees are "  .$quantity1);
                 
            }
        }
            ?>
            </div>
        <!--</form>-->
        <!-- filter for accupation -->
        <form action="post_survey_final.php" method="POST">
        <p style="margin-left:1200px">Filter by qualification-</p>
        <div style="margin-left:1200px">
        <select name="choice">
        <option>10th pass</option>
        <option>12th pass</option>
        <option>Graduation</option>
		<option>Degree</option>
		<option>Post-graduation</option>
        </select>
        <!--<input type="submit" name="search1" value="Search"/><br>-->
        <div style="margin-left=1200px">
        <?php
        if(isset($_POST['search1']))
        {
            $choice = $_POST['choice'];
            $connect = mysqli_connect("localhost", "root", "", "project");
            $qre = "SELECT COUNT(`int_id`) FROM `interviewee` WHERE `int_edu` LIKE '%".$choice."%'";
            $run = mysqli_query($connect, $qre);
            $store = mysqli_fetch_array($run);
            $st = $store[0];
           
            
            
           
        }
                ?>
                </div>

                <input style="margin-bottom: 50px; background-color: #39E8F5;  color: black; height: 20px; weight: 200px; border-radius: 20%" type="submit" name="search1" value="Search"/><br>
                
                
                </form>
                 <!--'<a href="filter_result.php?q1=' .$quantity.' & age=' .$quantity1. ' & quali=' .$st. '"><button type="submit" style="border:3px solid #39e8f5">POST</button></a>' -->
                <?php echo '<a href="filter_result.php?q1=' .$quantity.' & age=' .$quantity1. ' & quali=' .$st. '"><button style="margin-left: 70%; margin-bottom: 50px; background-color: #39E8F5;  color: black; height: 30px; weight: 20%; border-radius: 10px">POST</button></a>'?>

</body>

</html>