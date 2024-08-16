<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="cruisebooking";
$id=$_GET["id"];
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql="DELETE FROM users where id=$id";

if(mysqli_query($con,$sql)){
    header("Location:adminur.php");
}else{
    header("Location:admincon.php");
}

?>