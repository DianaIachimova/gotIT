<?php
include("connection.php");
$id=$_POST['id'];
$query ="DELETE FROM example WHERE id='$id'";

if(!mysqli_query($connection, $query)){
    die(mysqli_error($connection));

} else{
    echo "<script>window.location.href = 'index.php#blog' </script>";
}

mysqli_close($connection);

?>