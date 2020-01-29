<?php
ob_start();

session_start(); //to check the session

if(isset($_SESSION['uid'])) //if that variable consists the value...if true then direct it to next page!
{

header('location: des_landing_pg.php');  ///earlier was header
}
elseif(isset($_SESSION['uid1']))
{
	header('location:int_landing_pg.php');

}
elseif(isset($_SESSION['uid2']))
{
	header('location:admin.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <title>login bootstrap</title>
  </head>
  <body>
   
    <div class = "container-fluid">

        <div class = "header">
       
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
        <div class = "container-fluid">

            <div class = "body">
            
                           
                <div class="row">
                        <div class = "col-xl-12 col-md-12" style="background-color: #f1fa3c;height:740px;">
                    
                    <!--<img src="\images\bg1.png" alt="bg_img" style="width: 570px;height: 385px;margin-top: 100px;margin-left: 40px;margin-bottom:15px;box-shadow: 10px 10px 10px grey;">-->
                    <div class="boxer">
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-5 col-md-6 col-sm-7 col-xs-4" id="box" style ="background-color: white;height:520px;margin-left:28%;border-radius:20px;
                         margin-top:150px;box-shadow:10px 10px 10px gray">
                         <h2 style="text-align:center;padding-top:29px">Login </h2>

                    <form action="" method="post" id="form1">

                         <div class="input-group mb-3" style="padding-top:78px;margin-right:100px;padding-right:70px">
                         
                           <img src = "\images\about me.png" alt="username" style="width:32px;height:36px;margin-left:10px;">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value=""
                            style="border-radius:52px;background-color:#D7D7D7;padding-right:50px;padding-left:10px"  type="text" name="name" id="name1">
                            
                           
                          </div>

                          <div class="input-group mb-3" style="padding-top:8px;margin-right:100px;padding-right:70px">
                         
                         <img src = "\images\lock.png" alt="username" style="width:32px;height:36px;margin-left:10px;">
                          <input  class="form-control" placeholder="Password"  value = ""
                          style="border-radius:52px;background-color:#D7D7D7;padding-right:50px;padding-left:10px" type="password" name="pass" id="pass1">
                          
                         
                         </div>


                         <div class="input-group mb-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px" >
                             <select class="custom-select"  style="border-radius:52px;margin-right:20px;
                             padding-top:2px;margin-left:40px;border:solid 2px gray" name="cat" id ="ac" required>
                                <option disabled selected>Select Account category</option>
                                <option >designer</option>
                                <option >Interviewee</option>
                                <option >admin</option>
                             </select>
                             <div class="input-group-append" >
                                <label class="input-group-text" for="inputGroupSelect02">Choose</label>
                             </div>
                             </div>

                             <button type="button" class="btn btn-link">Forgot password?</button><br>
                             <a href="act1.php"><button type="button" class="btn btn-link">Dont have an account?Click here</button></a><br><br>
                             <div class = "login-button">

                             
                             <input class="btn btn-outline-success" type="submit" style="width:157px;height:60px;font-size:23px;
                            border:solid 2px green" value="login" name="Login" >
                            </div>
                        </div>
                    </form>
                    </div>

                    </div>
                   </div>

                </div>
            </div>
        
            
        
        
            </div>
        </div>
        
     </div>

    
  </body>
</html>
<?php

$conn =  mysqli_connect('localhost','root','','project');


//$test = $_POST['Login'];
//echo $test;
if(isset($_POST['Login']))

{
	
    $username = $_POST['name'];
	$password = $_POST['pass'];
	$category = $_POST['cat'];
	if($_POST['cat']=='designer')
	{

	echo $username;
	echo $password;
	$qry = "SELECT `des_id` FROM `designer` WHERE `des_username` = '$username' AND `des_password` = '$password';";
	//$qry .= "SELECT `int_id` FROM `interviewee` WHERE `int_username` = '$username' AND `int_password` = '$password';";
	//$run = mysqli_multi_query($conn, $qry);
	$run = mysqli_query($conn, $qry);///changes done in 107,106
	//$data = mysqli_fetch_assoc($run);
	$row = mysqli_num_rows($run); ///made different variables for the 2 queries
	


    if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('login bootstrap.php','_self');
		</script>
		<?php
		
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
        $id = $data['des_id'];
        if(!isset($_SESSION)){
            session_start();
        }
        else{
		   ///starts the new session
		$_SESSION['uid'] =$id; 
        header('location: des-landing-pg.php');
        ob_enf_fluch();
    
    }
		
        
	}
}
elseif($_POST['cat']=='Interviewee')
{
	echo $username;
	echo $password;
	$qry = "SELECT `int_id` FROM `interviewee` WHERE `int_username` = '$username' AND `int_password` = '$password';";
	$run = mysqli_query($conn, $qry);
	$row = mysqli_num_rows($run);

	if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('login bootstrap.php','_self');
		</script>
		<?php
		
	
	}
	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['int_id'];
        if(!isset($_SESSION))
        {
            session_start();   ///starts the new session

        }
        else{
		$_SESSION['uid1'] =$id; 
        header('location: int-landing-pg.php');
        ob_enf_fluch();
        }
		
        
	}
}
	else
	{
	$qry = "SELECT `admin_id` FROM `admin` WHERE `admin_username` = '$username' AND `admin_password` = '$password';";
	$run = mysqli_query($conn, $qry);
	$row = mysqli_num_rows($run);

	if($row < 1)
    {
        ?>
        <script>
        alert("Invalid credentials");
        window.open('login bootstrap.php','_self');
		</script>
		<?php
		//echo "start";
		//echo $id;
	
    }

	
	else// ($id = $data['des_id']) /// else tha pehle!
	{
    
        $data = mysqli_fetch_assoc($run);
		$id = $data['admin_id'];
        if(!isset($_SESSION))
        {
            
            session_start();   ///starts the new session
        }
        else{
		$_SESSION['uid2'] =$id; 
        header('location: admin.php');
        ob_enf_fluch();
        
        }
	
	}
    }
}
?> 
<style>
@media(max-width:500px){
  .boxer{
    margin-right:170px;

  }
 


}
@media(max-width:500px){
  .login-button{
    padding-right:200px;
  }
}


</style>

