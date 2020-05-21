<?php
    // Write Yerbolat Pazyl Start
    $auth = false;
    $login = null;

    if (isset($_COOKIE['username'])) {
        $auth = true;
        $login = $_COOKIE['username'];
    }// Write Yerbolat Pazyl End
?>
<!-- Write Musa Zhaksybay Start -->
<header class="header">
        <h1 id="title-cofe">Mandarin Café</h1>
        <small id="little-title">coffee & sweets</small>
        <div class="flex-box">
            <div class="child">
                <h2 class="slogan">#stay_home</h2>
                <h2 class="slogan">Chocolate + Milk = Love</h2>
            </div>
            <nav class="nav-menu">
                <ul class="nav-ul">
                    <li><a class="nav-ul-a" href="index.php">Home</a></li>
                    <li><a class="nav-ul-a" href="products.php">Products</a></li>
                   <!-- <li><a class="nav-ul-a" href="">Service</a></li> -->
                    <li><a class="nav-ul-a" href="about.php">About</a></li>
                    <li><a class="nav-ul-a" href="contacts.php">Contact</a></li>
                </ul>
            </nav>
            <div class="child child-last">
            <?php if ($auth === false): ?>
                <button id="btn-login">Log in</button>
                <button id="btn-register">Register</button>
            <?php else: ?>
                <a href="#" class="login-name"><?=$login ?></a>
                <button id="btn-logout-exit">logout</button>
            <?php endif; ?>
            </div>
        </div>
</header> <!-- Write Musa Zhaksybay End -->
