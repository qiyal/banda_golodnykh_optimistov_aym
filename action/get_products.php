<?php
    $mysqli = mysqli_connect('localhost', 'root', 'mysqlUsernamePassword', 'web_db');
    $resultP = mysqli_query($mysqli, "SELECT * FROM products");
    $result = mysqli_fetch_all($resultP, MYSQLI_ASSOC);

    echo json_encode($result);
