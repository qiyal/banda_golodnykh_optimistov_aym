<?php
     // Write Yerbolat Pazyl Start
    setcookie('username', '', time() - 3600, '/');
    unset($_COOKIE['username']);

    echo "logout";
    exit(); //Write Yerbolat Pazyl End
?>
