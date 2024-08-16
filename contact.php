<?php 

session_start();

if (!isset($_SESSION["uname"]) && !isset($_SESSION["pass"])) {
header("Location:login.html");
}

else{
$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$msg=$_POST["msg"];

$con=mysqli_connect("localhost","root","","cruisebooking");

$sql="INSERT INTO contact(name,email,contact,message) VALUES('$name','$email','$contact','$msg')";

if(mysqli_query($con,$sql)){
    header("Location:thankyou.html");
}
else{
    header("Location:Error.html");
}
}
?>