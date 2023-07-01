<?php
include ("../include/Connection.php");

$in=new connection();

$news=mysqli_real_escape_string($in->mysqli,$_POST['news']);
$description=mysqli_real_escape_string($in->mysqli,$_POST['description']);

$d=$in->insert("news",array(
    "news"=>$news,
    "description"=>$description
));

if($d=="inserted"){
    echo 1;
}else{
    echo 2;
}
?>