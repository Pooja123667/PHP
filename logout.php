<?php
//$conn =  mysqli_connect('localhost','root','','project');
session_start();
session_destroy();

if(isset($_SESSION['uid']))
    {
       //echo "session destroyed";
       header('location:login bootstrap.php');
        
    }
    elseif(isset($_SESSION['uid1']))
    {
        header('location:login bootstrap.php');
    }
    elseif(isset($_SESSION['uid2']))
    {
        header('location:login bootstrap.php');
    }
    else
    {
        echo "session not destroyed";
    }
    //echo "check";

    
    
?>