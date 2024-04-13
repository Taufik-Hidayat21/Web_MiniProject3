<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="" class="img1">
         <h3>why choose us?</h3>
         <p>More than just an ordinary grocery store, we are committed to providing healthier and more sustainable food choices for you and your family. We offer a wide variety of fresh, local and organic products, including seasonal fruits and vegetables, USDA Organic certified products, local products to support the community, and healthy lifestyle options such as gluten-free, vegan and allergy-friendly.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We offer a wide selection of high quality groceries to fulfill your healthy lifestyle. Our focus is on providing healthier, more sustainable food, so you can be sure you are providing the best for yourself and your family.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Can always rely on them to have all the organic ingredients I need. My son is allergic to milk and they have a variety of delicious dairy free options. The customer service is fantastic too!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>David Miller</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>The fresh produce is amazing! The tomatoes are very sweet and the spices are always fragrant. I love supporting local farmers and the fact that they use sustainable practices makes me feel good about shopping here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sarah Jones</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Their prices are competitive and the quality can't be beat. I am never disappointed with the products I get from here. Now, my whole family eats more fruits and vegetables!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Anderson</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Very convenient ordering through their app! Delivery is fast and always on time. I love the convenience of making my weekly shopping so much easier.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Garcia</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Their website is very easy to use. I was able to quickly find everything I needed and the checkout process was smooth. Will definitely recommend this shop to my friends!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Omar Khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I love how much they focus on a healthy lifestyle. They have many unique options that I can't find anywhere else. It's fun to try new things!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Li Wang</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>