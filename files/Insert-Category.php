<?php
include ("../include/Connection.php");

$in=new connection();

$category=mysqli_real_escape_string($in->mysqli,$_POST['category']);
$description=mysqli_real_escape_string($in->mysqli,$_POST['description']);

$d=$in->insert("category",array(
    "category"=>$category,
    "description"=>$description
));

if($d=="inserted"){
    echo 1;
}else{
    echo 2;
}
?>