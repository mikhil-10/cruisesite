<?php 
$host="localhost";
$u="root";
$p="";
$db="cruisebooking";

$conn = mysqli_connect($host,$u,$p,$db);

if (!$conn) {
    echo "error" . mysqli_connect_error();
}


?>