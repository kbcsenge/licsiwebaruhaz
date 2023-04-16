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
    <title>Gyümölcsök</title>
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
            <a href="../php/gyumolcs.php" class="active">Gyümölcsök🍎</a>
            <a href="../php/kosarba.php">Kosár🛒</a>
            <a href="../php/felhasznalok.php">Felhasználók👥</a>
            <a href="../php/profil.php">Profil👤</a>
            <a href="../html/index.html">Kijelentkezés👋</a>
            <q>Minden nap egy alma az orvost távol tartja.</q>
        </nav>
        <main>
            <section>
                <div>
                    <h1>Gyümölcs kínálat</h1>
				<form action="kosarba.php" method="post" style="all: unset;">
                    <table class="center">
                        <tr style="border-bottom: 5px solid green">
                            <th style="font-size: 30px">Gyümölcs</th>
                            <th style="font-size: 30px">Név</th>
                            <th style="font-size: 30px">Ár</th>
                            <th style="font-size: 30px">Mennyiség</th>
                            <th style="font-size: 30px">Kosárba</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/alma.jpg" alt="Alma" title="Alma" width="220" height="150">
                            </td>
                            <td>
                                <p>Alma</p>
                            </td>
                            <td>
                                <p>700 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegalma" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="alma" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/szilva.jpg" alt="Szilva" title="Szilva" width="220" height="150">
                            </td>
                            <td>
                                <p>Szilva</p>
                            </td>
                            <td>
                                <p>800 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegszilva" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="szilva" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/barack.jpg" alt="Barack" title="Barack" width="220" height="150">
                            </td>
                            <td>
                                <p>Őszibarack</p>
                            </td>
                            <td>
                                <p>630 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegoszibarack" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="oszibarack" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/banan.jpg" alt="Banán" title="Banán" width="220" height="150">
                            </td>
                            <td>
                                <p>Banán</p>
                            </td>
                            <td>
                                <p>750 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegbanan" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="banan" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/eper.jpg" alt="Eper" title="Eper" width="220" height="150">
                            </td>
                            <td>
                                <p>Eper</p>
                            </td>
                            <td>
                                <p>520 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegeper" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="eper" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/ananasz.jpg" alt="Ananász" title="Ananász" width="220" height="150">
                            </td>
                            <td>
                                <p>Ananász</p>
                            </td>
                            <td>
                                <p>900 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegananasz" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="ananasz" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/dinnye.jpg" alt="Görögdinnye" title="Görögdinnye" width="220" height="150">
                            </td>
                            <td>
                                <p>Görögdinnye</p>
                            </td>
                            <td>
                                <p>560 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyiseggorogdinnye" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="gorogdinnye" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/kivi.jpg" alt="Kivi" title="Kivi" width="220" height="150">
                            </td>
                            <td>
                                <p>Kivi</p>
                            </td>
                            <td>
                                <p>410 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegkivi" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="kivi" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/korte.jpg" alt="Körte" title="Körte" width="220" height="150">
                            </td>
                            <td>
                                <p>Körte</p>
                            </td>
                            <td>
                                <p>480 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegkorte" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="korte" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/licsi.jpg" alt="Licsi" title="Licsi" width="220" height="150">
                            </td>
                            <td>
                                <p>Licsi</p>
                            </td>
                            <td>
                                <p>940 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyiseglicsi" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="licsi" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/mandarin.jpg" alt="Mandarin" title="Mandarin" width="220" height="150">
                            </td>
                            <td>
                                <p>Mandarin</p>
                            </td>
                            <td>
                                <p>470 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegmandarin" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="mandarin" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/narancs.jpg" alt="Narancs" title="Narancs" width="220" height="150">
                            </td>
                            <td>
                                <p>Narancs</p>
                            </td>
                            <td>
                                <p>700 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegnarancs" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="narancs" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/szolo.jpg" alt="Szőlő" title="Szőlő" width="220" height="150">
                            </td>
                            <td>
                                <p>Szőlő</p>
                            </td>
                            <td>
                                <p>1550 Ft/kg</p>
                            </td>
							<td>
								<input type="text" name="mennyisegszolo" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="szolo" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                    </table>
				</form>	
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
