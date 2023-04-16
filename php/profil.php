<?php
$conn = "";
require "connect.php";
session_start();
$email=$_SESSION["user"]["email"];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tatár Liliána, Kovács-Bodó Csenge">
    <link rel="stylesheet" href="../css/licsicss.css">
    <link rel="icon" href="../media/icon.jpg">
    <title>Profilom</title>
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
                <a href="../php/felhasznalok.php">Felhasználók👥</a>
                <a href="../php/profil.php" class="active">Profil👤</a>
                <a href="../php/logout.php">Kijelentkezés👋</a>
                <q>Minden nap egy alma az orvost távol tartja.</q>
            </nav>
            <main>
                <section>
                    <div>
                        <h1 style="font-size: 40px">Profilom</h1>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                            <?php
                            $id=$_SESSION["user"]["ID"];
                            $sql="select nev, felhasznalonev, email, szuldatum, orszag, nem, rendelesekszama from felhasznalo where ID=$id";
                            $run = $conn->query($sql);
                            $res = mysqli_fetch_assoc($run);
                            $kor = date_diff(date_create($res['szuldatum']), date_create('today'))->y;
                            ?>
                            <fieldset>
                                <label style="display: flex; align-items: self-start;"><img src="../media/profilkepek/<?php echo $email; ?>.jpg" alt="Profilkép" title="Profilkép" width="220" height="150"></label><br>
                                <label>Teljes név: </label><?php echo  $res['nev'] ?> <br>
                                <label>Felhasználónév: </label><?php echo $res['felhasznalonev'] ?> <br>
                                <label>E-mail: </label><?php echo $res['email'] ?> <br>
                                <label>Kor: </label><?php echo $kor ?> <br>
                                <label>Ország: </label><?php echo $res['orszag'] ?> <br>
                                <label>Nem: </label><?php echo $res['nem'] ?> <br>
                                <label>Rendelések száma: </label><?php echo $res['rendelesekszama'] ?> <br>
                            </fieldset>
                        </form>
                        <div class="flex-container">
                            <button class="gomb button-regist" onclick="window.location.href = '../php/profmodosit.php';">Profil módosítása</button>
                            <button class="gomb button-regist" onclick="window.location.href = '../php/ajanlo.php';">Vissza a főoldalra</button>
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
<?php } else{ header('Location: ../php/login.php'); }?>
</body>
</html>
