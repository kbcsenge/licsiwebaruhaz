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
    <title>Zöldségek</title>
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
            <a href="../php/zoldseg.php" class="active">Zöldségek🍅</a>
            <a href="../php/gyumolcs.php">Gyümölcsök🍎</a>
            <a href="../php/kosarba.php">Kosár🛒</a>
            <a href="../php/felhasznalok.php">Felhasználók👥</a>
            <a href="../php/profil.php">Profil👤</a>
            <a href="../html/index.html">Kijelentkezés👋</a>
            <q>Minden nap egy alma az orvost távol tartja.</q>
        </nav>
        <main>
            <section>
                <div>
                    <h1>Zöldség kínálat</h1>
				<form action="kosarba.php" method="post" style="all: unset;">
                    <table class="center">
                        <tr style="border-bottom: 5px solid green">
                            <th style="font-size: 30px">Zöldség</th>
                            <th style="font-size: 30px">Név</th>
                            <th style="font-size: 30px">Ár</th>
                            <th style="font-size: 30px">Mennyiség</th>
                            <th style="font-size: 30px">Kosárba</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/paradicsom.jpg" alt="Paradicsom" title="Paradicsom" width="220" height="150">
                            </td>
                            <td>
                                <p>Paradicsom</p>
                            </td>
                            <td>
                                <p>700 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegparadicsom" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="paradicsom" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/paprika.jpg" alt="Paprika" title="Paprika" width="220" height="150">
                            </td>
                            <td>
                                <p>Paprika</p>
                            </td>
                            <td>
                                <p>1000 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegpaprika" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="paprika" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/repa.jpg" alt="Répa" title="Répa" width="220" height="150">
                            </td>
                            <td>
                                <p>Répa</p>
                            </td>
                            <td>
                                <p>400 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegrepa" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="repa" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/gyoker.jpg" alt="Gyöker" title="Gyökér" width="220" height="150">
                            </td>
                            <td>
                                <p>Gyökér</p>
                            </td>
                            <td>
                                <p>300 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyiseggyoker" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="gyoker" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/krumpli.jpg" alt="Krumpli" title="Krumpli" width="220" height="150">
                            </td>
                            <td>
                                <p>Burgonya</p>
                            </td>
                            <td>
                                <p>500 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegburgonya" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="burgonya" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/hagyma.jpg" alt="Hagyma" title="Hagyma" width="220" height="150">
                            </td>
                            <td>
                                <p>Hagyma</p>
                            </td>
                            <td>
                                <p>600 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyiseghagyma" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="hagyma" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/kaposzta.jpg" alt="Káposzta" title="Káposzta" width="220" height="150">
                            </td>
                            <td>
                                <p>Káposzta</p>
                            </td>
                            <td>
                                <p>750 Ft/db</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegkaposzta" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="kaposzta" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/lilahagyma.jpg" alt="Lilahagyma" title="Lilahagyma" width="220" height="150">
                            </td>
                            <td>
                                <p>Lilahagyma</p>
                            </td>
                            <td>
                                <p>240 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyiseglilahagyma" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="lilahagyma" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/padlizsan.jpg" alt="Padlizsán" title="Padlizsán" width="220" height="150">
                            </td>
                            <td>
                                <p>Padlizsán</p>
                            </td>
                            <td>
                                <p>430 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegpadlizsan" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="padlizsan" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/retek.jpg" alt="Retek" title="Retek" width="220" height="150">
                            </td>
                            <td>
                                <p>Retek</p>
                            </td>
                            <td>
                                <p>550 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegretek" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="retek" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/uborka.jpg" alt="Uborka" title="Uborka" width="220" height="150">
                            </td>
                            <td>
                                <p>Uborka</p>
                            </td>
                            <td>
                                <p>450 Ft/db</p>
                            </td>
                            <td>
								<input type="text" name="mennyiseguborka" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="uborka" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/pritaminpaprika.jpeg" alt="Pritaminpaprika" title="Pritaminpaprika" width="220" height="150">
                            </td>
                            <td>
                                <p>Pritaminpaprika</p>
                            </td>
                            <td>
                                <p>700 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegpritaminpaprika" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="pritaminpaprika" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/salata.jpg" alt="Saláta" title="Saláta" width="220" height="150">
                            </td>
                            <td>
                                <p>Saláta</p>
                            </td>
                            <td>
                                <p>250 Ft/db</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegsalata" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="salata" class="gomb">Kosárba teszem</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../media/cukkini.png" alt="Cukkini" title="Cukkini" width="220" height="150">
                            </td>
                            <td>
                                <p>Cukkini</p>
                            </td>
                            <td>
                                <p>460 Ft/kg</p>
                            </td>
                            <td>
								<input type="text" name="mennyisegcukkini" size="10" style="all: unset; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: left; padding: 12px 20px;">Kg
							</td>
                            <td>
                                <button type="submit" name="cukkini" class="gomb">Kosárba teszem</button>
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
