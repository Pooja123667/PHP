<?php

$query = "SELECT * FROM `interviewee` WHERE CONCAT(`int_id`, `int_name`, `int_gen`, `int_occu`,`int_edu`) LIKE '%".$fn."%'";

?>

<!--<form action="admin.php" method="POST">
    <h3 style="font-size:30px;margin-left:20px;color:white" >Interviewee</h3>
    <h3 style="color:white;margin-left:20px"> Filter by random search - </h3>
    <input style="margin-left:20px" type ="text" name="valueToSearch" id="vts" placeholder="Type here to search"></input>
    <input type="submit" name="search" value="Random Search"/><br><br>

    
        </form>



        else {
    $query = "SELECT * FROM `interviewee`";
    $search_result = filterTable($query);
}



// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}-->