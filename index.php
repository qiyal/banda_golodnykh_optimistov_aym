<?php
        // Write Musa Zhaksybay Start
        require_once "config/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<!-- HEADER OPEN -->
    <?php 
        require_once "elems/header.php";
    ?>
<!-- HEADER CLOSE -->
    <!-- Write Musa Zhaksybay Start -->
    <!-- Write Yerbolat Pazyl Start -->
<!-- HOME OPEN -->
    <div class="main-container">
        <div class="poster-box">
            <div class="box">
                <h1 class="title-home-text">
                    Mandarin Café & Bakery
                </h1>
                <div class="address-home-text">
                    86B Baitursynova Street, Almaty City
                    <br>
                    Mo – Fri 10am – 7pm | Sat – Sun 10am – 6pm
                </div>
            </div>
        </div>

        <div class="flex-box-home">
            <div class="flex-child-home ch-1"></div>
            <div class="flex-child-home ch-2"></div>
            <div class="flex-child-home ch-3">
                <div class="box">
                    <h2 class="ch-3-h2">Breakfast & Fresh <br>Baked Goods</h2>
                    <div class="ch-3-div">
                        We offer all day breakfast, brunch and a selection of take away snacks, breads and cakes.
                    </div>
                    <a class="btn-a-style ch-3-a-btn" href="contacts.html">Our Stores</a>
                </div>
            </div>
        </div>

        <div class="home-slider">
            <h2 class="h2-home">A Small Selection From <br> Our Bakery</h2>
            <a class="btn-a-style" href="">All Products</a>
        </div>

        <div class="paralax">
                <div class="paralax-box">
                    <div class="box">
                        <h2 class="paralax-title">With Tradition and Passion.<br>Handmade for You.</h2>
                        <a href="#" class="parallax-btn">About Us</a>
                    </div>
                </div>
        </div>

        <!-- MODAL -->
        <div class="window-box">
            <div class="window">
                <!-- Картинка крестика -->
                <button class="close">X</button>

            	<header class="header">
                    <h1 id="title-cofe">Mandarin Café</h1>
                    <small id="little-title">coffee & sweets</small>
                </header>


            	<div class="form">
                    <h2>Sign up</h2>
                    <form action="registration.php" method="POST" id="regFormData">
                        <input type="text" placeholder="Username" name="login" class="input">
                        <small class="small-reg">Input username!</small>

                        <input type="email" placeholder="Email" name="email" class="input">
                        <small class="small-reg">Input email!</small>

                        <input type="text" placeholder="Name" name="name" class="input">
                        <small class="small-reg">Input name!</small>

                        <input type="password" placeholder="Password" name="pass1" class="input">

                        <input type="password" placeholder="Retype password" name="pass2" class="input">
                        <small class="small-reg"></small>
                        <button type="submit" class="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- EXIT MODAL -->
    </div>
<!-- HOME CLOSE -->
<!-- FOOTER OPEN -->
    <?php
        require_once "elems/footer.php";
    ?>
<!-- FOOTER CLOSE -->
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
</body>
</html>
<!-- Write Yerbolat Pazyl End -->
