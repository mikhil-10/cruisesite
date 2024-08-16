<?php 

$name=$_POST["name"];
$email=$_POST["email"];
$num=$_POST["num"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$servername="localhost";
$username="root";
$password="";
$dbname="cruisebooking";
$con=mysqli_connect($servername,$username,$password,$dbname);



$sql="INSERT INTO users(name,email,contact,username,password) VALUES('$name','$email','$num','$uname','$pass')";


if(mysqli_query($con,$sql)){
   header("Location:login.html");
}else{
    header("Location:404.html");
}


?>

