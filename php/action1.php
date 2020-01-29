<?php
//Database connection
$conn = mysqli_connect('localhost','root','','project');
if($conn == false)
{
	echo("Connection Failed");
}
else{
	echo("connection");
}
?>