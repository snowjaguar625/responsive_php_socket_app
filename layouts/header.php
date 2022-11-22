<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="./assets/css/desk.css">
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="./assets/css/mob.css">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "programmer1_maindb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <div class="wt_header">
        <a href="./index.php">
            <img>
        </a>
        <div class="header_menu">
            <a href="./index.php" class="button_label text_button <?php if($pagenum == 1) echo "text_button_active" ?>">Home</a>
            <a href="./allitems.php" class="button_label text_button <?php if($pagenum == 2) echo "text_button_active" ?>">All Items</a>
            <a href="./daydate.php" class="button_label text_button <?php if($pagenum == 3) echo "text_button_active"?>">Daydate</a>
            <a href="./dayjustpearl.php" class="button_label text_button <?php if($pagenum == 4) echo "text_button_active" ?>">Dayjust Pearl</a>
            <a href="./datejust.php" class="button_label text_button <?php if($pagenum == 5) echo "text_button_active" ?>">Date Just</a>
            <button class="button">Contact us</button>
            <!-- <button type="button" class="btn btn-outline-success">Success</button> -->
        </div>
        <div class="header_menu_collap">
            <a href="#" class="button_label text_button">Menu</a>
            <i class="bi-chevron-down"></i>
        </div>
    </div>