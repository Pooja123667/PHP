<?php

global $conn;
$conn =  mysqli_connect('localhost', 'root','', 'project');

    if($_POST['ne'] == 'Designer')
    {

    $query = "SELECT * from designer where des_name like '%".$s."%'";
   
    }
    
    elseif($_POST['ne'] == 'Interviewee')
    {

    $query = "SELECT * FROM `interviewee` WHERE `int_name` like '%" .$s. "%'";
 
    }

    $run = mysqli_query($conn, $query);

    if($query == true)
    {
        ?>
        <table border=1px; style="border-color: white; color: white;" cellspacing="5" cellpaddinng="20">
            <tr><td>Id</td>
            <td>name</td>
            <td>Delete</td>

        <?php 
        if($_POST['ne'] == 'Designer')
        {
        while($data = mysqli_fetch_assoc($run))
        {
            $i = $data['des_id'];
            $n = $data['des_name'];
            ?> 
            <tr><td><?php echo $data['des_id'];?></td>
            <td><?php echo $data['des_name'];?></td>
            <td><?php echo '<a href="delete.php?id=' . $i . '">delete</a>'?></td></tr>
            <?php
            }
        }
        
        elseif($_POST['ne'] == 'Interviewee')
        {
        while($data = mysqli_fetch_assoc($run))
        {
            $i = $data['int_id'];
            ?>
            <tr><td> <?php echo $data['int_id'];?></td>
            <td> <?php echo $data['int_name'];?></td>
            <td><?php echo '<a href="delete.php?idd=' . $i . '">delete</a>'?></td></tr>
            <?php
            }
        }
        ?>
    </table>
    <?php
    }


