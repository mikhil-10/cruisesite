<?php 

session_start();

if (!isset($_SESSION["uname"]) && !isset($_SESSION["pass"])) {
header("Location:login.html");
}
else{
$cmnt=$_POST["comments"];


$con=mysqli_connect("localhost","root","","cruisebooking");

$sql="INSERT INTO comments(id,comment) VALUES(null,'$cmnt')";

if(mysqli_query($con,$sql)){
    header("Location:thankyou.html");
}
else{
    header("Location:Error.html");
}
}

?>