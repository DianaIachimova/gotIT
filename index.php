<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="style.css" >

    </head>

    <body>
        <div class="header">
            <div class="nav">
                <a href="#" class="link">Home</a>
                <a href="#blog" class="link" >Blog Post</a>
                <a href="#" class="link">Gallery</a>

            </div>
            <div class="header-content">
                <div class="hd-title">EXPLORE</div>
                <div class="hd-subtitle">A journey is best measured in friends <br> rather then miles </div>
            </div>


        </div>



        <div class="test" id="blog">

        <?php
        include ("connection.php");
        $sql= mysqli_query($connection, "SELECT * FROM example");
        while($row = mysqli_fetch_assoc($sql)) { ?>
            <div class="test-nume"><?php echo $row['name'] ?></div>
            <div class="test-prenume"><?php echo $row['surname'] ?></div>
            <div class="imagine"><img src="<?php echo $row['image'] ?>"></div>
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                <input type="submit" value="edit"> 
        </form>

        <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                <input type="submit" value="delete"> 
        </form>




            <?php } mysqli_close($connection); ?>


            <button><a href="add.php">ADD</a></button>
            
        </div>

        <div class="bg2" id="gallery">

    <div class="title">gallery</div>


    <div class="owl-carousel owl-theme">
	<div class="item"><img src="imgs/1.jpg"></div>
	<div class="item"><img src="imgs/2.jpg"></div>
	<div class="item"><img src="imgs/3.jpg"></div>
	<div class="item"><img src="imgs/4.jpg"></div>
	<div class="item"><img src="imgs/5.jpg"></div>
	<div class="item"><img src="imgs/6.jpg"></div>
	<div class="item"><img src="imgs/7.jpg"></div>
	<div class="item"><img src="imgs/8.jpg"></div>

        </div>


</div>

        <script>
            $(document).ready(function ($) {
	$(".owl-carousel").owlCarousel({
		loop: true,
		margin: 10,
		dots: false,
		nav: true,
		items: 4, responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 4,
              nav: true
            }
          }
	});
	var owl = $(".owl-carousel");
	owl.owlCarousel();
	$(".next-btn").click(function () {
		owl.trigger("next.owl.carousel");
	});
	$(".prev-btn").click(function () {
		owl.trigger("prev.owl.carousel");
	});

});
            </script>
        
    </body>
</html>





