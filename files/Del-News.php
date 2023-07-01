<?php
include("../include/conn.php");
$duid=$_GET['mydel'];
$sql2="SELECT * FROM `newa` WHERE `nid`='$duid'";
$run2=mysqli_query($conn,$sql2);


    $SQL="DELETE FROM `newa` WHERE `nid`='$duid'";
    $run=mysqli_query($conn,$SQL);
    if($run){
           echo 1;
        
    }else{
        echo 2;
    }


?>