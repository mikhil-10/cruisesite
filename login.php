<?php 
session_start();

$uname=$_POST["uname"];
$pass=$_POST["pass"];


$con=mysqli_connect("localhost","root","","cruisebooking");

$sql="SELECT * FROM users where username='$uname' and password='$pass'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    header("Location:home.php");
    $_SESSION["uname"]=$uname;
    $_SESSION["pass"]=$pass;
}
else{
    header("Location:error.html");
}

?>