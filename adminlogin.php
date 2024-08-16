<?php 
session_start();

$name=$_POST["uname"];
$pass=$_POST["pass"];


$con=mysqli_connect("localhost","root","","cruisebooking");

$sql="SELECT * FROM adminlogin where name='$name' and password='$pass'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    header("Location:adminur.php");
    $_SESSION["uname"]=$name;
    $_SESSION["pass"]=$pass;
}
else{
    header("Location:adminloginerror.php");
}

?>