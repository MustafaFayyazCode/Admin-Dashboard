<?php
include ("../include/Connection.php");

$in=new connection();

$sponsar=mysqli_real_escape_string($in->mysqli,$_POST['sponsar']);
$description=mysqli_real_escape_string($in->mysqli,$_POST['description']);
$logo=$_FILES['logo']['name'];
$exe=pathinfo($logo,PATHINFO_EXTENSION);
$arr=array("jpg","png","jpeg");
if(in_array($exe,$arr)){
    $d=$in->insert("sponsar",array(
        "sponsar"=>$sponsar,
        "description"=>$description,
        "logo"=>$logo
    ));
    
    if($d=="inserted"){
        move_uploaded_file($_FILES['logo']['tmp_name'],"../imgs/".$logo);
    echo 1;
}else{
    echo 2;
}
}
?>