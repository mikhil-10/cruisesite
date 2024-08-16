<?php 
session_start();
if (!isset($_SESSION["uname"]) && !isset($_SESSION["pass"])) {
    # code...
    header("Location:adminlogin.html");
}
$name=$_POST["name"];
$email=$_POST["email"];
$num=$_POST["num"];

$pass=$_POST["pass"];

$con=mysqli_connect("localhost","root","","cruisebooking");

$sql="INSERT INTO adminlogin(name,email,contact,password) VALUES('$name','$email','$num','$pass')";


if(mysqli_query($con,$sql)){
   header("Location:adminlogin.html");
}else{
    header("Location:404.html");
}


?>