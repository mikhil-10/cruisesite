<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="cruisebooking";

$id=$_GET["id"];

$con=mysqli_connect($servername,$username,$password,$dbname);

$sql="DELETE FROM contact where id=$id";

if(mysqli_query($con,$sql)){
    header("Location:admincon.php");
}else{
    header("Location:admincon.php");
}

?>