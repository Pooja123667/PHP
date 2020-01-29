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

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" type="text/css" href="/css/interstyle.css">

</head>

<body>

<img src="\images\logo.png" style="width:90px;height:90px; float: left;">

<img src="\images\profile.png" style="width: 60px; height: 60px; margin-left: 87%; border-radius: 50%;"><br>

<button style="margin-left:1330px;margin-top:15px"><a href=logout.php>Logout</a></button>

<div class="interbox">

<?php

$conn = mysqli_connect("localhost", "root", "", "project");
$query = "SELECT * FROM interviewee  where int_id = $test";
$run = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($run);
$name = $result['int_name'];

?>

<h1>Welcome, <?php echo $name?></h1>
</div>

<div>


<img src="\images\rupee.png" style="width: 90px; height: 90px; border-radius: 10%; float: left; background-color: white; margin-top: 100px; margin-left: 30%;">
</div>

<div>
<img src="\images\Survey.png" style="width: 90px; height: 90px; border-radius: 10%; background-color: white; margin-top: 100px; margin-left: 25%;">
</div>

<div class="dropdown">
  <button class="dropbtn">Wallet</button>
  <div class="dropdown-content">
    <a href="#">Wallet balance</a>
  </div>
</div>

<div class="dropdown1">
  <button class="dropbtn1">Survey</button>
  <div class="dropdown-content1">
    <a href="#">Survey List</a>
    <form action="interviewee_landing_page.php" method="post"><button class="btn" style="height: 40px; width: 160px;  background-color: #FF3968; border: none; color: white;" name="check">Give a survey</button></form>
  </div>
</div>

</body>

</html>
