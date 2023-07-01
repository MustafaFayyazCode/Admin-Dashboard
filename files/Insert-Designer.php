<?php
include ("../include/Connection.php");

$in=new connection();

$user=mysqli_real_escape_string($in->mysqli,$_POST['user']);
$email=mysqli_real_escape_string($in->mysqli,$_POST['email']);
$role=mysqli_real_escape_string($in->mysqli,$_POST['role']);
$password=mysqli_real_escape_string($in->mysqli,$_POST['password']);
$spic=$_FILES['spic']['name'];
$exe=pathinfo($spic,PATHINFO_EXTENSION);
$arr=array("jpg","jpeg","png");
if(in_array($exe,$arr)){

    $d=$in->insert("Designer",array(
        "user"=>$user,
        "email"=>$email,
        "role"=>$role,
        "password"=>$password,
        "spic"=>$spic
    ));

    if($d=="inserted"){
        move_uploaded_file($_FILES['spic']['tmp_name'],"../imgs/".$spic);
        echo 1;
    }else{
        echo 2;
    }
}

?>