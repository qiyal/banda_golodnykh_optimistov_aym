<!-- Write Ayaulym Sibaeva Start -->
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


        <div class="box-1">
            <div class="polaroid">
                <img src="./assets/images/products/product1.jpg" alt="Cottage Loaf" style="width:100%">
                <div class="description">
                <h2>Cottage Loaf</h2>
                


               
                </div>
            </div>
            
            
            <div class="polaroid">
                <img src="./assets/images/products/product2.jpg" alt="Sourdough Bread" style="width:100%">
                <div class="description">
                <h2>Sourdough Bread</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product3.jpg" alt="Pretzel Rolls" style="width:100%">
                <div class="description">
                <h2>Pretzel Rolls</h2>
                </div>
            </div>

        </div>

        <div class="box-2">

            <div class="polaroid">
                <img src="./assets/images/products/product4.jpg" alt="Spelt Bread" style="width:100%">
                <div class="description">
                <h2>Spelt Bread</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product5.jpg" alt="Baguette" style="width:100%">
                <div class="description">
                <h2>Baguette</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product6.jpg" alt="Tin Loaf" style="width:100%">
                <div class="description">
                <h2>Tin Loaf</h2>
                </div>
            </div>

        </div>

        <div class="box-2">

            <div class="polaroid">
                <img src="./assets/images/products/product7.jpg" alt="Pretzel" style="width:100%">
                <div class="description">
                <h2>Pretzel</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product8.jpg" alt="Rye Bread" style="width:100%">
                <div class="description">
                <h2>Rye Bread</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product9.jpg" alt="Nut Stick" style="width:100%">
                <div class="description">
                <h2>Nut Stick</h2>
                </div>
            </div>

        </div>
        
        <div class="box-2">

            <div class="polaroid">
                <img src="./assets/images/products/product10.jpg" alt="Sesame Bagel" style="width:100%">
                <div class="description">
                <h2>Sesame Bagel</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product11.jpg" alt="Chocolate Cake" style="width:100%">
                <div class="description">
                <h2>Chocolate Cake</h2>
                </div>
            </div>

            <div class="polaroid">
                <img src="./assets/images/products/product12.jpg" alt="Buckwheat Bread" style="width:100%">
                <div class="description">
                <h2>Buckwheat Bread</h2>
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
                    <form action="index.html" name="f1">

                        <input type="text" placeholder="Username" name="name1" class="input">

                        <input type="email" placeholder="Email" name="email1" class="input">

                        <input type="password" placeholder="Password" name="pass1" class="input">

                        <input type="password" placeholder="Retype password" name="pass2" class="input">

                        <input type="submit" value="Sign up" name="sab" class="submit" >
                    </form>
                </div>
            </div>
        </div>
        <!-- EXIT MODAL -->
    </div>
    <!-- FOOTER OPEN -->
        <?php
            require_once "elems/footer.php";
        ?>
    <!-- FOOTER CLOSE -->
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
     <script defer src="//lk.easynetshop.ru/frontend/v5/test.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
<!-- Write Ayaulym Sibaeva End -->
