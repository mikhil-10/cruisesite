<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="cruisebooking";
$id=$_GET["id"];

$con=mysqli_connect($servername,$username,$password,$dbname);

$sql="DELETE FROM `img` WHERE `img`.`id` = $id;";

if(mysqli_query($con,$sql)){
    header("Location:admingallery.php");
}else{
    header("Location:admincon.php");
}

?>