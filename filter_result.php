 <?php

$conn = mysqli_connect('localhost', 'root', '', 'project');
session_start();
$test = $_SESSION['uid'];
global $test;
echo $test;

$q1 = $_POST['q1'];


$q2 = $_POST['q2'];

$edu = $_POST['choice'];

$occu = $_POST['choice1'];

$query = "INSERT INTO survey (question1, question2,des_fk) VALUES('$q1', '$q2','$test')";
$run2 = mysqli_query($conn, $query);
//$row1 = mysqli_fetch_assoc($run2);

$query1 = "SELECT * FROM `survey` WHERE `des_fk`='$test'";
$run3 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($run3);
$res1=$row1['survey_id'];
echo $res1;


$sql = "SELECT int_id FROM `interviewee` WHERE int_edu='$edu' AND int_occu='$occu' AND int_gen IN  (".implode(',', $_POST['male']).")";
$run = mysqli_query($conn, $sql);
//header('location:des-landing-pg.php');
while($row2 = mysqli_fetch_assoc($run))
{
  $result=$row2['int_id'];
  if($result==true)
  {

    $qry = "INSERT INTO sur_int (survey_fk,int_fk) VALUES ('$res1','$result') ";
    //$qry = "SELECT * FROM sur_int if "
    $run4 = mysqli_query($conn, $qry);
    echo $qry;

  } 
  else{
      echo "Not executed";
  } 

}


     

?>
