<?php 
include("connection.php");
$id=$_POST['id'];
$result=mysqli_query($connection, "SELECT * FROM example WHERE id='$id'");
while($row = mysqli_fetch_assoc($result)) {
    ?>

<form action="update.php" method="post">

<input type="text" placeholder="nume" name="name" value="<?php echo $row['name']?>">
<input type="text" placeholder="prenume" name="surname" value="<?php echo $row['surname']?>">
<input type="text" placeholder="url" name="image" value="<?php echo $row['image']?>">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit" value="sumbiiiit">
</form>  

<?php  
}

// mysqli_close($connection);
?>


<!-- CREATE TABLE example(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name TEXT,
    surname TEXT,
    image TEXT
);

INSERT INTO example VALUES 
(1, "Diana", "Iachimova", " https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjEjgncyzBQKuD01wzCJ38PrUXy-lOA877g&usqp=CAU"); -->