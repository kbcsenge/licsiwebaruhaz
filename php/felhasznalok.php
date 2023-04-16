<?php
$conn = "";
require "connect.php";
session_start();
$sql = "SELECT nev, felhasznalonev, orszag, rendelesekszama, email FROM felhasznalo";
$run = $conn -> query($sql);

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tatár Liliána, Kovács-Bodó Csenge">
    <link rel="stylesheet" href="../css/licsicss.css">
    <link rel="icon" href="../media/icon.jpg">
    <title>Felhasználók</title>
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
                <a href="../php/zoldseg.php" >Zöldségek🍅</a>
                <a href="../php/gyumolcs.php">Gyümölcsök🍎</a>
                <a href="../php/kosarba.php">Kosár🛒</a>
                <a href="../php/felhasznalok.php" class="active">Felhasználók👥</a>
                <a href="../php/profil.php">Profil👤</a>
                <a href="../html/index.html">Kijelentkezés👋</a>
                <q>Minden nap egy alma az orvost távol tartja.</q>
            </nav>
            <main>
                <section>
                    <div>
                        <h1 style="font-size: 40px">Felhasználók</h1>
                        <table class="center">

                            <tr style="border-bottom: 5px solid green; font-size: 20px;">
                                <th scope="col" style="width: 500px">Profilkép</th>
                                <th scope="col" style="width: 500px">Név</th>
                                <th scope="col" style="width: 500px">Felhasználónév</th>
                                <th scope="col" style="width: 500px">Ország</th>
                                <th scope="col" style="width: 500px">Rendelések száma</th>
                            </tr>

                            <?php
                            while ($row = $run -> fetch_array()){
                                echo
                                "<tr>
                                    <td><img src='../media/profilkepek/{$row[4]}.jpg' alt='Profilkép' title='Profilkép' width='220' height='150'></td>
                                    <td>{$row[0]}</td>
                                    <td>{$row[1]}</td>                                 
                                    <td>{$row[2]}</td>
                                    <td>{$row[3]}</td>								
                                    </tr>";
                            }
                            ?>
                        </table>
                    </div>
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


