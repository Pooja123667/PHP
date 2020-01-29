<html>
    <head>
        <title>Design_history</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 


    </head>
<body >
<div class = "container-fluid">

<div class = "header">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="logout.php"><img src="\images\logo1.png" alt="main-logo" style="width:100px;height: 50px;border-radius: 18px;"></a>
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
<!--<button style="margin-left:1400px;margin-top:10px;"> <a href= logout.php> LOGOUT</a> </button>-->
<p style="text-align:center;margin-top:80px;margin-right:50px;font-size:40px"> My Design Hisory </p>

</body>
</html>

<?php
session_start();
$test = $_SESSION['uid'];
//echo $test;
global $test;
$conn = mysqli_connect('localhost','root','','project');
$query = "SELECT * from my_design WHERE des_ids = '$test'";
$run = mysqli_query($conn, $query);
//function displayTable()
//{
    //global $conn;
    
    
    if($run == True)
    {
        ?>
    
   <!--<div  class="tablez" style="margin-left:300px;margin-top:100px;">
    <table class="table table-dark table-hover" style="border:solid 3px #39e8f5" cellpadding="15" cellspacing="10" border=1px>
        <tr>
            <td style="padding:10px">
               <b> Design Name</b>
            </td>
            <td style="padding:10px">
                <b>Designer Brief</b>
            </td>
            <td style="padding:10px">
                <b>Design File</b>
            </td>
        </tr>-->


        <div class="table-responsive" style="background-color:#f1fa3c;margin-top:50px">

  <!--Table-->
  <table class="table">

    <!--Table head-->
    <thead>
      <tr>
        
        <th class="th-sm">Design Name</th>
        <th class="th-sm">Design Brief</th>
        <th class="th-sm">File Uploaded</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <!--<tbody>
      <tr>
        
        <td>Lorem ipsum dolor</td>
        <td>Lorem ipsum dolor</td>
        <td>Lorem ipsum dolor</td>
      </tr>
      <tr>
       
        <td>Lorem ipsum dolor</td>
        <td>Lorem ipsum dolor</td>
        <td>Lorem ipsum dolor</td>
      </tr>
      <tr>
        
        <td>Lorem ipsum dolor</td>
        <td>Lorem ipsum dolor</td>
        <td>Lorem ipsum dolor</td>
      </tr>
    </tbody>
    <!--Table body-->

  <!--</table>-->
  <!--Table-->

</div>

        <?php
    while($data = mysqli_fetch_assoc($run))
    {
        ?>
      <tr>
      <td>
      <?php
      echo  $data['design_name']; 
      ?>
      </td>
      <td>
      <?php
      echo  $data['design_brief'];
      ?>
      </td>
      <td>
      <?php
      echo  $data['file_name'];
      ?>
      </td>
      
      </tr> 
      </div>
      <?php 
    }
    ?>

</table>

<?php
    }
    
    

?>

