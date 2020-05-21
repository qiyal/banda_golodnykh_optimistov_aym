<?php
    // Write Yerbolat Pazyl Start
    $getLogin = $_POST['login'];
    $getPassword = $_POST['password'];
    $getPassword = md5($getPassword.'123456789');

    $mysqli = mysqli_connect('localhost', 'root', 'mysqlUsernamePassword', 'web_db');
    
    $resultQ = mysqli_query($mysqli, "SELECT login FROM users WHERE login = '$getLogin' AND pass = '$getPassword'");
    $resultQ = mysqli_fetch_assoc($resultQ);
    $mysqli->close();

    if ($resultQ) {
        setcookie('username', $getLogin, time() + 3600 * 10, "/");
        echo "YES";
    } else {
        echo "-1";
    }// Yerbolat Pazyl End
