<?php
session_start(); 
if(isset($_SESSION['uid2'])) 
{

}


$test=  $_SESSION['uid2'];
  //echo $test;
global $test;



			$conn = mysqli_connect("localhost", "root", "", "project");
			$query = "SELECT * FROM  `admin`  where admin_id = $test";
			$run = mysqli_query($conn, $query);
			$result = mysqli_fetch_assoc($run);
			$name = $result['admin_username'];



?>

<!DOCTYPE html>

<html>

<head>



<title>Admin panel</title>

<!--<link rel="stylesheet" type="text/css" href="interstyle.css">-->
<!--<link rel="stylesheet" type="text/css" href="/css/admincss.css">-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body  style="background-color:purple">

<!--<img src="\images\logo.png" style="width:90px;height:90px;">-->

<div class="interbox">


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
      <a class="nav-link " href="logout.php" tabindex="-1" ><b>LOGOUT</b></a>
    </li>
  </ul>
 
</div>
</nav>                 


</div>
</div>


</div>
<div class = "container-fluid" >
    <div class = "row">
        <div class = "col-xl-12" style="color:yellow;border:solid 1px white;margin-top:90px">
 <h1 style="text-align:center">Welcome admin, <?php echo $name?></h1>
 
 </div>
 </div>


 <div class= "row" style="margin-top:5%">
    <div class = "col-xl-6 col-lg-6 col-md-6" style="border:5px solid white">
    <div class = row  style="margin-left:20%">
    <form action="filters.php" method ="POST"> <button class = "col-xl-8" style="background-color:pink;width:200px;height:50px;color:black; margin-top:100px;margin-bottom:100px" type = "submit"><b>INTERVIEWEE FILTERS</b></button></form>
    <img class="col-xl-4 " src="\images\int.png" alt="interviewee" style="height:200px;width:100px;padding-top:10px">
    </div>

    </div>

    <div class = "col-xl-6 col-lg-6 col-md-6" style="border:5px solid white">
    <div class = row  style="margin-left:20%">
    <form action="filters_des.php" method ="POST"> <button class = "col-xl-8" style="background-color:pink;width:200px;height:50px;color:black; margin-top:100px;margin-bottom:100px" type = "submit"><b>DESIGNER FILTERS</b></button></form>
    <img class="col-xl-4 " src="\images\sketch.png" alt="interviewee" style="height:200px;width:100px;padding-top:10px">
    </div>
    
        
    </div>
  </div>
</div>








        
<div class="header">
    <form  method="POST" action="admin.php" >
        <h3 style="color:yellow" class = "col-xl-8"> Search for entries in the database </h3>
          <div class="form-box">
            
          <input id="sid" type="text" name="idd" class="search-field form-control col-xl-4 col-lg-4 col-md-6" value="" placeholder="Enter name..">
          <!--<input id="sn" type="text" name="ne" class="search-field location" value="" placeholder="Enter name..">   
         
          <label style="color: white;font-size: 20px;">Category:</label>-->

		<select required style="margin-top:1%" class="search-field location btn btn-secondary dropdown-toggle col-xl-3 col-lg-4 col-md-3" type="text" name="ne"  id="sn" placeholder="select category">
		<option>Select category</option>
        <option>Designer</option>
        <option>Interviewee</option>
        </select>
          <button class="search-btn btn btn-success" type="submit"  name="button1" value="buttn1" style="margin-top:1%"> Search </button>
        </form>
</div>


<div id="refreshpage"></div>

</body>

</html>

<script type="text/javascript" src="jquery.min.js"></script>

<?php if(isset($_POST['button1']))

{?>
    <script>
    var s = document.getElementById("sid").value;
    var n = document.getElementById("sn").value;</script>

    <?php
    $s = $_POST['idd'];
    $n = $_POST['ne'];

    include("update.php");
    ?>

<script type="text/javascript">
$(document).ready(function(){
    $('#refreshpage').load('update.php');
    //refresh();
});

function refresh()
{
    setTimeout(function() {
        $('#refreshpage').load('update.php');
        refresh();
    }, 200);
}
</script>
<?php
}

?>
    
































































































