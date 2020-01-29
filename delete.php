<?php

$conn = mysqli_connect('localhost', 'root', '', 'project');
//$id= '';
$id = $_REQUEST['id'];
echo $name;

$name = $_REQUEST['name'];
echo $name;

$sql = "DELETE FROM `designer` WHERE `des_id`= '$id'";

$run = mysqli_query($conn, $sql);

$idd = $_REQUEST['idd'];

$query = "DELETE FROM `interviewee` WHERE `int_id`= '$idd'";

$run = mysqli_query($conn, $query);
if($run)
{
    //echo "record deleted";
    header("location: admin.php");
}
else
{
    //echo "Sorry record cannot be deleted";
    alert("sorry record cannot be deleted");
    ?><script>window.open("admin.php");</script><?php
}


?>