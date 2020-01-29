<?php
session_start();
$test = $_SESSION['uid'];
//echo $test;


if(isset($_POST['post1']))
{
$br = $_POST['des_name'];
$desc = $_POST['brief'];
//$file=$_POST['fileToUpload'];
$pname = rand(1000,10000)."-".$_FILES['fileToUpload']['name']; //number assigned by rand function so that file does not get replaced
//temp file to store
$tname = $_FILES['fileToUpload']['tmp_name'];
///storing in the directory
$uploads_dir = '/uploads';
///upload directory path
move_uploaded_file($tname,$uploads_dir.'/'.$pname);

$conn = mysqli_connect('localhost','root','','project');

$qry="INSERT INTO `my_design` (`des_fk`, `design_name`, `design_brief`) VALUES ('$test','$br','$desc')";
$run = mysqli_query($conn,$qry);
$row1 = mysqli_fetch_assoc($run);
if($run==true)
{
    echo "success";
}
else{
    echo "not success";
}

}

//move_uploaded_file('$file','uploads');




//header ('location:designer_landing_page.php')


?>