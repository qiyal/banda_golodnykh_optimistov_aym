<!-- Write Ayaulym Sibaeva Start -->
<?php
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
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">

    <link href="//lk.easynetshop.ru/frontend/v5/test.css" rel="stylesheet">

    <title>Product</title>
</head>
<body>
<!-- HEADER OPEN -->
    <?php
        require_once "elems/header.php";
    ?>
<!-- HEADER CLOSE -->

    <!-- PRODUCTS OPEN-->

    <div class="main-container">
        <div class="title">
            <img src="./assets/images/products/title_bread.jpg" width="200" height="400" class="rightpic"/>
            <h1 class="h1-title"><b>Explore the Taste of<br>Our Organic Products<b></h1>
        </div>

        <div class="filter-product">
            <button class="filter-btn active-filter" disabled>All</button>
            <button class="filter-btn">Bread</button>
            <button class="filter-btn">Buns</button>
            <button class="filter-btn">Sweets</button>
        </div>

        <div class="list-data">

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
    <!-- PRODUCT CLOSE -->

    <!-- FOOTER OPEN -->
        <?php
            require_once "elems/footer.php";
        ?>
    <!-- FOOTER CLOSE -->
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
     <script defer src="//lk.easynetshop.ru/frontend/v5/test.js"></script>
    <script src="js/script.js"></script>
    <script src="js/order.js"></script>
</body>
</html>
<!-- Write Ayaulym Sibaeva End -->
