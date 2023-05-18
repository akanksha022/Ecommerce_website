<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p> We believe in delivering only the highest quality flowers to our customers. Our dedicated team works closely with trusted growers and suppliers to source fresh, vibrant, and long-lasting blooms. Each arrangement is meticulously crafted with attention to detail, ensuring every petal and stem is flawless and beautiful.</p>
            <a href="shop.php" class="btn">SHOP NOW</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What we provide?</h3>
            <p>We offer a wide selection of fresh and vibrant flowers sourced from trusted growers and suppliers. Whether you're looking for classic roses, exotic orchids, or seasonal blooms, we provide an extensive range of options to suit any taste or occasion..</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Who we are?</h3>
            <p>We are more than just a flower shop—we are a team of passionate floral enthusiasts who believe in the power of flowers to bring joy, beauty, and meaning to people's lives.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>I am extremely pleased with the floral arrangements I ordered from this website. The flowers were fresh, vibrant, and beautifully arranged. .</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>TINA</h3>
        </div>

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>I can't say enough about the amazing service I received at flowers portal. The staff was friendly, knowledgeable, and helped me choose the perfect flowers for my sister's birthday..</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>ROSS</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>From start to finish, [Flower Shop Name] provided an outstanding experience. Their online ordering process was seamless, and the delivery was prompt. The arrangement exceeded my expectations; it was a true work of art..</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>KIARA</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>I recently worked with .flowers for my wedding, and I am beyond grateful for their expertise and creativity. The floral arrangements were absolutely stunning and added a touch of elegance to our special day. .</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>ABHISHEK</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>I received a surprise bouquet from .flowers, and it instantly brightened my day..</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>KARAN</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>The arrangement of flowers exceeded my expectations; it was a true work of art. The recipient was overjoyed, and I couldn't be happier. Thank you for the exceptional service!.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>JENNY</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>