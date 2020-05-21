<?php
    // Write Ayaulym Sibaeva Start
    require "config.php";

    $host = $config['db']['server'];
    $root = $config['db']['username'];
    $password_db = $config['db']['password'];
    $db_name = $config['db']['name'];

    $mysqli = new mysqli($host, $root, $password_db, $db_name);
    
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        exit();
    } // Write Ayaulym Sibaeva End
