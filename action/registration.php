<?php
     // Write Munira Kasymova Start
     $getLogin = $_POST['login'];
     $getPassword = $_POST['pass1'];
     $getEmail = $_POST['email'];
     $getName = $_POST['name'];
     $getPassword = md5($getPassword.'123456789');


     $mysqli = mysqli_connect('localhost', 'root', 'mysqlUsernamePassword', 'web_db');
     $has = mysqli_query($mysqli, "SELECT login FROM users WHERE login = '$getLogin'");
     $has = mysqli_fetch_assoc($has);
     $sql = "INSERT INTO users (`login`, `pass`, `name`, `email`) VALUES ('$getLogin', '$getPassword', '$getName', '$getEmail')";
          if (!$has) {
            setcookie('username', $getLogin, time() + 3600 * 10, "/");
            $create = mysqli_query($mysqli, $sql);
            $mysqli->close();
            echo "YES";
          } else {
             $mysqli->close();
             echo "-1";
           }
              ?>
