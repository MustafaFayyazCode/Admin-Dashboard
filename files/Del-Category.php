<?php
include ("../include/Connection.php");
$cid= $_POST['cid'];
$in=new connection();
$in->delete('data',"cid='$cid'");
// $duid=$_GET['mydel'];
// $sql2="SELECT * FROM `category` WHERE `cid`='$duid'";
$res=$in->delete("category","*",null,"`cid`");
// $d=$in->mysqli;
// if($d){
    // echo 1;
// }else{
    // echo 2;
// }
// $run2=mysqli_query($conn,$sql2);
// $in=new connection();



    // $SQL="DELETE FROM `category` WHERE `cid`='$duid'";
    // $res=$in->select("category","*",null,"`cid`");

    // $run=mysqli_query($conn,$SQL);

?>