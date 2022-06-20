<?php
include("connection.php");
$id = $_POST["id"];
$name=$_POST["name"];
$surname = $_POST["surname"];
$image = $_POST["image"];


$query="UPDATE example SET name='$name', surname='$surname', image='$image' WHERE id='$id'";
if(!mysqli_query($connection, $query)){
    die(mysqli_error($connection));

} else{
    echo "<script>window.location.href = 'index.php#blog' </script>";
}

mysqli_close($connection);
?>