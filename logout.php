<?php
session_start();
    include ('E:\laptrinhweb\www\SUNNY_CHINESE\config.php');
    unset($_SESSION['nguoidung']);
    header('location: mainPage.php')
?>