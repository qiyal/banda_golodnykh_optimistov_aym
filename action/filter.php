<?php
    $mysqli = mysqli_connect('localhost', 'root', 'mysqlUsernamePassword', 'web_db');
    $filter = $_GET['filter'];


    if($filter == 'All') {
            $resultP = mysqli_query($mysqli, "SELECT * FROM products");
        } else if($filter == 'Sweets') {
             $resultP = mysqli_query($mysqli, "SELECT * FROM products WHERE type = 'Sweet'");
        } else if($filter == 'Bread') {
             $resultP = mysqli_query($mysqli, "SELECT * FROM products WHERE type = 'Bread'");
        } else if($filter == 'Buns') {
            $resultP = mysqli_query($mysqli, "SELECT * FROM products WHERE type = 'Buns'");
        }

        $result = mysqli_fetch_all($resultP, MYSQLI_ASSOC);

        echo json_encode($result);
