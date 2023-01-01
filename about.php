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
    <title>About Us</title>
    <link rel="shortcut icon" href="images/Organic Orchard.jpg" type="image/x-icon">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <section class="about">

        <div class="row">

            <div class="box">
                <img src="images/about-img-1.png" alt="">
                <h3>why choose us?</h3>
                <p>It’s our attention to the small stuff, scheduling of timelines and keen project management that makes
                    us stand out from the rest. You want results. We have found that the best way to get them is with up
                    front research – of
                    your company, competitors, target market and customer psychographics. Only after we fully understand
                    you
                    and your customers, do we recommend a plan of attack.


                </p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

            <div class="box">
                <img src="images/about-img-2.png" alt="">
                <h3>what we provide?</h3>
                <p>We provide young people with development and networking opportunities in their mediation practice. We
                    also support peer mediation services in schools and organisations and promote the sustainability of
                    peer mediation programmes. Furthermore being a member of the network has other perks as well – see
                    below for details.</p>
                <a href="shop.php" class="btn">our shop</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">clients reivews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non
                    cupiditate amet deserunt aperiam quas ex.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non
                    cupiditate amet deserunt aperiam quas ex.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sakib Al-Hasan</h3>
            </div>

            <div class="box">
                <img src="images/pic-3.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non
                    cupiditate amet deserunt aperiam quas ex.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Md. Mohsin Uddin</h3>
            </div>

            <div class="box">
                <img src="images/pic-4.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non
                    cupiditate amet deserunt aperiam quas ex.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sadika Islam Sneha</h3>
            </div>

            <div class="box">
                <img src="images/pic-5.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non
                    cupiditate amet deserunt aperiam quas ex.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Tamanna Sheme</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non
                    cupiditate amet deserunt aperiam quas ex.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Syed Nazmus Sakib</h3>
            </div>

        </div>

    </section>









    <?php include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>