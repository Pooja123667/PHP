<html>

<input type="hidden" value="<?php echo $_POST['Name'] ?>" name="Name" >
         <input type="hidden" value="<?php echo $_POST['Email'] ?>" name="Email">
         <input type="hidden" value="<?php echo $_POST['Cnum'] ?>" name="Cnum">
         <input type="hidden" value="<?php echo $_POST['DOB'] ?>" name="DOB">
         <input type="hidden" value="<?php echo $_POST['male'] ?>" name="male">
         <input type="hidden" value="<?php echo $_POST['cat'] ?>" name="cat"> 
         <input type="hidden" value="<?php echo $_POST['edu'] ?>" name="edu">
         <input type="hidden" value="<?php echo $_POST['occup'] ?>" name="occup">
         <input type="hidden" value="<?php echo $_POST['Int'] ?>" name="Int">
         <input type="hidden" value="<?php echo $_POST['username'] ?>" name="username">
         <input type="hidden" value="<?php echo $_POST['pass'] ?>" name="pass">
         <input type="hidden" value="<?php echo $_POST['repass'] ?>" name="repass">
    </html>

<?php

$n = $_POST['Name'];
$e = $_POST['Email'];
$d = $_POST['DOB'];
$c = $_POST['Cnum'];
$g = $_POST['male'];
$ca = $_POST['cat'];
$ed = $_POST['edu'];
$o = $_POST['occup'];
$i = $_POST['Int'];
$u = $_POST['username'];
$p = $_POST['pass'];
$r = $_POST['repass'];

//echo $_POST['cat'];
$conn = new mysqli('localhost','root','','project');
if($conn ->connect_error)
{
    echo("Datbase Connection Failed");
    die('Connection failed :' .$conn->connect_error);
}
elseif($_POST['cat'] =='designer')
{
    $qry = "INSERT INTO `designer`( `des_name`, `des_username`, `des_password`, `des_cont`, `des_dob`, `des_edu`, `des_int`, `des_occu`, `des_email`, `des_gen`) VALUES ('$n', '$u', '$p', '$c', '$d', '$ed', '$i', '$o', '$e', '$g')";
$run = mysqli_query($conn, $qry);  

    echo "connection successful...";
    header('location:homepage.php');
}
else
{
$qry = "INSERT INTO `interviewee`( `int_name`, `int_username`, `int_password`, `int_cont`, `int_dob`, `int_edu`, `int_int`, `int_occu`, `int_email`, `int_gen`) VALUES ('$n', '$u', '$p', '$c', '$d', '$ed', '$i', '$o', '$e', '$g')";
$run = mysqli_query($conn, $qry);  

    echo "connection successful...";
    header('location:homepage.php');
   
}
?>