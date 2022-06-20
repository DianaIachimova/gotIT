<?php
$hostname="localhost";
$username="root";
$password="";
$database="teste";

$connection=mysqli_connect($hostname, $username, $password ) or die ("Nu ma pot conecta la db");
mysqli_select_db($connection, $database) or die("nu s-a gasit baza de date");

?>