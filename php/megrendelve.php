<?php
$conn = "";
require "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tatár Liliána, Kovács-Bodó Csenge">
    <link rel="stylesheet" href="../css/licsicss.css">
    <link rel="icon" href="../media/icon.jpg">
    <title>Kosár</title>
</head>
<body>
<?php if(isset($_SESSION['user'])){ ?>
    <div id="page-container">
        <div class="content-wrap">
            <header>
                <img class="headerimage" src="../media/fokepjo.jpg" alt="Fejléc kép" title="Fejléc kép">
            </header>
            <nav class="menu">
                <a href="../php/ajanlo.php">LICSI🙋</a>
                <a href="../php/zoldseg.php">Zöldségek🍅</a>
                <a href="../php/gyumolcs.php">Gyümölcsök🍎</a>
                <a href="../php/kosarba.php" class="active">Kosár🛒</a>
                <a href="../php/felhasznalok.php">Felhasználók👥</a>
                <a href="../php/profil.php">Profil👤</a>
                <a href="../html/index.html">Kijelentkezés👋</a>
                <q>Minden nap egy alma az orvost távol tartja.</q>
            </nav>
            <main>
                <section>
                    <h1>Köszönjük a megrendelést! Hamarosan kapni fog egy visszaigazoló emailt a rendelésről.</h1>
                    <a class="link button-regist" style="padding: 10px 15px 10px 15px" href='../php/ajanlo.php'>Vissza a főoldalra</a>
                </section>
            </main>
        </div>
        <div id="footer">
            <h4>Szegedi Tudományegyetem Természettudományi és Informatikai Kar Webtervezés gyakorlat 2022/23/2.félév</h4>
            <h5>Készítette: Tatár Liliána, Kovács-Bodó Csenge</h5>
        </div>
    </div>
<?php } else{ header('Location: ../php/login.php'); }?>
</body>
</html>
