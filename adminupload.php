<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cruisebooking';

$img=$_FILES['img']['name'];

$target_directory = "img/gallery/";
$tflie = $target_directory.basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$tflie);

$conn = mysqli_connect($servername,$username,$password,$dbname);



$sql = "INSERT INTO `img` (`id`, `image`) VALUES (NULL, '$img')";


$tdir = "img/gallery/";

$target_file = $tdir . basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'], $target_file);


if (mysqli_query($conn,$sql)) {

    header("Location:admingallery.php");

    # code...

} else {

    # code...

    echo "not inserted";

}

?>