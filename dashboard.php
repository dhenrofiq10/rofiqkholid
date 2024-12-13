<?php
session_start();
include ("koneksi.php");

if(!isset($_SESSION['email'])){
    header("location:index.php");
}

echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
        <a href="logout.php">
            <span class="icon">
             <ion-icon name="airplane-outline"></ion-icon>
            </span>
            <span class="title">Sign Out</span>
        </a>
    </li>
    <?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    if ($page == 'dashboard'){
        include "bebas.php";
    } elseif($page == 'form'){
        include 'form_2.php';
    } elseif($page == 'tabelbiasa'){
        include "tabel_a.php";
    }
} else {
    include "bebas.php";
}
?>
</body>
</html> 