<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tatár Liliána, Kovács-Bodó Csenge">
    <link rel="stylesheet" href="../css/licsicss.css">
    <link rel="icon" href="../media/icon.jpg">
    <title>QUIZ</title>
</head>
<body>
<div id="page-container">
    <header>
        <img class="headerimage" src="../media/fokepjo.jpg" alt="Fejléc kép" title="Fejléc kép">
    </header>
    <nav class="menu">
        <a href="../html/index.html" >LICSI🙋</a>
        <a href="../html/egeszseg.html" >Miért fontos az egészséges életmód?🥕</a>
        <a href="../php/quiz.php" class="active">Teszteld tudásod!</a>
        <a href="../php/regist.php">Regisztráció🖊️</a>
        <a href="../php/login.php">Bejelentkezés👋</a>
        <q>Minden nap egy alma az orvost távol tartja.</q>
    </nav>
    <main>
        <section>
            <h3>Quiz</h3>
            <?php
            $kerdesek = array(
                array(
                    'kerdes' => 'A paradicsom egy...',
                    'valasz' => array(
                        'A' => 'Zöldség',
                        'B' => 'Gyümölcs',
                    ),
                    'helyes' => 'B'
                ),
                array(
                    'kerdes' => 'Hol őshonos a licsi?',
                    'valasz' => array(
                        'A' => 'Indonézia',
                        'B' => 'Japán',
                        'C' => 'Dél-Kína',
                        'D' => 'Portugália'
                    ),
                    'helyes' => 'C'
                ),
                array(
                    'kerdes' => 'Melyik növény-rendszertani családba tartozik a cukkini?',
                    'valasz' => array(
                        'A' => 'Tökfélék',
                        'B' => 'Káposztafélék',
                        'C' => 'Burgonyafélék',
                        'D' => 'Zellerfélék'
                    ),
                    'helyes' => 'A'
                ),
                array(
                    'kerdes' => 'Az alábbi gyümölcsök közül melyik tartalmazza a legtöbb szénhidrátot 100 grammjában?',
                    'valasz' => array(
                        'A' => 'Eper',
                        'B' => 'Banán',
                        'C' => 'Alma',
                        'D' => 'Ananász'
                    ),
                    'helyes' => 'B'
                )
            );
            if (isset($_POST['submit'])) {
                $res = 0;
                foreach ($kerdesek as $key => $kerdes) {
                    if (isset($_POST['valasz'][$key])) {
                        if ($_POST['valasz'][$key] == $kerdes['helyes']) {
                            $res++;
                        }
                    }
                }
                echo "<h1>"."Eredmény: " . $res . "/" . count($kerdesek)."</h1>";
            } else {
                // kvíz form
                echo '<form method="post" action="quiz.php" style="border: green 2px solid; margin-bottom: 100px">';
                foreach ($kerdesek as $key => $kerdes) {
                    echo "<h3>" . $kerdes['kerdes'] . "</h3>";
                    foreach ($kerdes['valasz'] as $betu => $valasz) {
                        echo '<label><input type="radio" name="valasz[' . $key . ']" value="' . $betu . '"> ' . $betu . ': ' . $valasz . '</label><br>';
                    }
                }
                echo '<br><div class="flex-container" style="margin-bottom: 50px"><button type="submit" name="submit" class="gomb">Ellenőrzés</button></div></form>';

            }
            ?>
        </section>
    </main>
    <div id="footer">
        <h4>Szegedi Tudományegyetem Természettudományi és Informatikai Kar Webtervezés gyakorlat 2022/23/2.félév</h4>
        <h5>Készítette: Tatár Liliána, Kovács-Bodó Csenge</h5>
    </div>
</div>
</body>
</html>

