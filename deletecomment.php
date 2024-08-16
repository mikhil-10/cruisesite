<?php 

$id=$_GET["id"];

$con=mysqli_connect("localhost","root","","cruisebooking");

$sql="DELETE FROM comments where id='$id'";

if(mysqli_query($con,$sql)){
    header("Location:admincomment.php");
}else{
    echo "error";
}


?>