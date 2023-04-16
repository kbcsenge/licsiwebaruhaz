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
    <title>Ajánló</title>
    <style>
        h2{
            font-size: 40px;
            color: red;
        }
    </style>
</head>
<?php if(isset($_SESSION['user'])){ ?>
<body>
<div id="page-container">
    <div class="content-wrap">
        <header>
            <img class="headerimage" src="../media/fokepjo.jpg" alt="Fejléc kép" title="Fejléc kép">
        </header>
        <nav class="menu">

            <a href="../php/ajanlo.php" class="active">LICSI🙋</a>
            <a href="../php/zoldseg.php" >Zöldségek🍅</a>
            <a href="../php/gyumolcs.php">Gyümölcsök🍎</a>
            <a href="../php/kosarba.php">Kosár🛒</a>
            <a href="../php/felhasznalok.php">Felhasználók👥</a>
            <a href="../php/profil.php">Profil👤</a>
            <a href="../html/index.html">Kijelentkezés👋</a>
            <q>Minden nap egy alma az orvost távol tartja.</q>

        </nav>
        <canvas id="vaszon" width="400" height="80"></canvas>
        <main style="margin: 0 !important;">
            <section>
                <div class="flex-container">
                    <div>
							<span>
								<img src="../media/narancs.jpg" alt="Narancs" title="Narancs" width="220" height="150">
							</span>
                        <p>860 ft/kg helyett:</p>
                        <h2>700 ft/kg</h2>
                    </div>
                    <div>
							<span>
								<img src="../media/dinnye.jpg" alt="Görögdinnye" title="Görögdinnye" width="220" height="150">
							</span>
                        <p>1024 ft/kg helyett:</p>
                        <h2>560 ft/kg</h2>
                    </div>
                    <div>
							<span>
								<img src="../media/lilahagyma.jpg" alt="Lilahagyma" title="lilahagyma" width="220" height="150">
							</span>
                        <p>745 ft/kg helyett:</p>
                        <h2>240 ft/kg</h2>
                    </div>
                </div>
                <h1>További termékekért kattitson az alábbiak valamelyikére:</h1>
                <div class="flex-container">
                    <div>
                        <a href="../php/gyumolcs.php" class="csempelink" style="background-image: url('../media/alma.jpg')">
								<span class="flex_this">
									<span class="csempecim">Gyümölcsök</span>
									<span class="csempeszoveg">Tekintse meg a friss gyümölcs kínálatunkat.</span>
								</span>
                        </a>
                    </div>
                    <div>
                        <a href="../php/zoldseg.php" class="csempelink" style="background-image: url('../media/repa.jpg')">
								<span class="flex_this">
									<span class="csempecim">Zöldségek</span>
									<span class="csempeszoveg">Tekintse meg a friss zöldség kínálatunkat.</span>
								</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <div id="footer">
        <h4>Szegedi Tudományegyetem Természettudományi és Informatikai Kar Webtervezés gyakorlat 2022/23/2.félév</h4>
        <h5>Készítette: Tatár Liliána, Kovács-Bodó Csenge</h5>
    </div>
</div>
<script>
    let c=document.getElementById("vaszon");
    let ctx=c.getContext("2d");
    let grd=ctx.createLinearGradient(0, 0, 300, 0);
    grd.addColorStop(0, "#ff0000");
    grd.addColorStop(0.9, "#4fee40");
    grd.addColorStop(1, "#1c5405");
    ctx.fillStyle=grd;
    ctx.font="80px Arial"
    ctx.fillText("AKCIÓS TERMÉKEINK",0,80, 400);
</script>
<?php } else{ header('Location: ../php/login.php'); }?>
</body>
</html>
