<?php

include ("connection.php");

$name=$_POST["name"];
$surname = $_POST["surname"];
$image = $_POST['image'];


$query = "INSERT INTO example(name, surname, image) VALUES ('$name', '$surname', '$image')";
if(!mysqli_query($connection, $query)){
    die(mysqli_error($connection));

} else{
    echo "<script>window.location.href = 'index.php#blog' </script>";
}

mysqli_close($connection);
?>