<?php

session_start();
$test = $_SESSION['uid'];
echo $test;

$br = $_POST['des_name'];
$desc = $_POST['brief'];
//$file=$_POST['fileToUpload'];

$conn = mysqli_connect('localhost', 'root', '', 'project');

//echo $_FILES["addtemplate"];
$filename = $_FILES["fileToUpload"]["name"];
$tempname = $_FILES["fileToUpload"]["tmp_name"];
$folder = "uploads/".$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);
//echo "<img src='$folder' height='100' width='100'/>"

if($filename!=""){


$qry = "INSERT INTO `my_design` (`des_ids`, `design_name`, `design_brief`,`file_name`) VALUES ('$test','$br','$desc','$filename')";
$res=mysqli_query($conn,$qry);
//$qry = "INSERT INTO `my_design` (`file_name`) VALUES ('$filename')";

//$sql = "INSERT INTO `my_design`(`file_name`) VALUES('$filename')";

if($res==true)
{
    //echo "photo is inserted successfully Successfully";
    header("location: des-landing-pg.php");
}
else
{
    echo mysqli_error($conn);
}}
?>