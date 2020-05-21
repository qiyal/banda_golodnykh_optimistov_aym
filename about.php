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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
    <title>About</title>
</head>
<body>
    <!-- HEADER OPEN -->
    <?php 
        require_once "elems/header.php";
    ?>
    <!-- HEADER CLOSE -->

    <!-- ABOUT OPEN -->
    <div class="main-container">
        <div class="bg-img">
            <div class="box">
                <h1 class="title-about-text">
                    Quality Is the Best Recipe
                </h1>

                <div class="little-text">
                    About us
                </div>
            </div>
        </div>

        <div class="box-about1">
            <div class="flex-child-about ch-1-about"></div>
            <div class="flex-child-about ch-2-about">
                <div class="tiny-text"> We love what we do<br><br></div>
                <h3>Lorem ipsum dolor sit amet, consectetuer elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</h3>
            </div>
        </div>

        <div class="box-about2">
            <div class="flex-child-about2 ch-3-about">
                <h1>Best Quality &<br>Gluten-Free<br><br></h1>
                <br><br>
                <p>Donec quam felis, ultricies nec,<br> pellentesque eu, pretium quis,<br> sem. Nulla consequat massa quis enim. <br><br></p>
                <a class="button1" href="products.php">Show Products</a>
            </div>
            <div class="flex-child-about2 ch-4"> </div>
        </div>

        <div class="bg-img2">
            <div class="box">
                <h1 class="about-text">
                    Handcraft + Passion + Time
                </h1>
            </div>
        </div>


        <div class="box-about1">
            <div class="flex-child-about ch-5"></div>
            <div class="flex-child-about ch-6">
                <h1 style="font-size: 50px; font-weight: 900;">Come by and <br> experience real<br> taste.</h1><br>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean<br> commodo pellentesque eu, pretium quis, sem. Nulla consequat<br> massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p><br><br><br>
                <a href="contacts.php" class="btn-a-style">Find a Store</a>
            </div>
        </div>


        <div class="our-team"></div>
        <div class="box-team">
            <div class="ch-7">
                <h1 style="font-size: 50px; font-weight: 900; text-align: center;">Our Team</h1><br>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean<br> commodo pellentesque eu, pretium quis, sem. Nulla consequat<br> massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p><br><br><br>
            </div>
        </div>
    </div>

    <div class="out-team-list">
    <div class="column">
                  <div class="card">
                    <img src=".\assets\images\about\munika.jpg" alt="Muni" style="width:100%">
                    <div class="container">
                      <h2>Munira Kosimova</h2>
                      <p class="title">Baker</p>
                      <p>muniraa@gmail.com</p>
                      <p><button class="button"><a style="text-decoration:none; color: white;"  href="https://instagram.com/1kassymova?igshid=1m6t8c74ntkgt">Contact</a></button></p>
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="column">
                      <div class="card">
                        <img src=".\assets\images\about\yerbo.jpg" alt="Yerbo" style="width:100%"/>
                        <div class="container">
                          <h2>Yerbolat Pazyl</h2>
                          <p class="title">Director</p>
                          <p>pazylyerbo@gmail.com</p>
                          <p><button class="button"><a style="text-decoration:none; color: white;"  href="https://instagram.com/q.i.y.a.l?igshid=6k3txz50xkuy">Contact</a></button></p>
                        </div>
                      </div>
                    </div>

                <div class="column">
                  <div class="card">
                    <img src="./assets/images/about/ayau.jpg" alt="Ayau" style="width:100%">
                    <div class="container">
                      <h2>Ayaulym Sibaeva</h2>
                      <p class="title">Barista</p>
                      <p>ayaqueening@gmail.com</p>
                      <p><button class="button"><a style="text-decoration:none; color: white;"  href="https://instagram.com/aya_tommeraas?igshid=1qkrgt9ax9..">Contact</a></button></p>
                    </div>
                  </div>
                </div>


              <div class="column">
                <div class="card">
                  <img src="./assets/images/about/muss.jpg" alt="Musa" style="width:100%">
                  <div class="container">
                    <h2>Musa Zhaksybay</h2>
                    <p class="title">Baker</p>
                    <p>musaa@gmail.com</p>
                    <p><button class="button"><a style="text-decoration:none; color: white;"  href="https://instagram.com/zhaksybayevvv?igshid=qa4sac4zx4fp">Contact</a></button></p>
                  </div>
                </div>
              </div></div>
          
    </div>

    <!-- ABOUT CLOSE -->

    <!-- FOOTER OPEN -->
        <?php
            require_once "elems/footer.php";
        ?>
    <!-- FOOTER CLOSE -->

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
    <script src="js/script.js"></script>
</body>
</html>
<!-- Write Ayaulym Sibaeva End -->
