<?php
$conn = "";
require "connect.php";
session_start();
if(isset($_POST['update'])){
    if (!isset($_POST['passwd']) || trim($_POST['passwd']) === "" || !isset($_POST['passwd-check']) || trim($_POST['passwd-check']) === ""){
        header('Location: ../php/jelszoupdate.php?&hiba=A jelszó és az ellenőrző jelszó megadása kötelező!');
    }else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $_POST['passwd'])){
        header('Location: ../php/jelszoupdate.php?&hiba=A megadott jelszó formátuma nem megfelelő!');
    } else{
        $passwd=$_POST['passwd'];
        $passwdcheck=$_POST['passwd-check'];
        $id=$_SESSION['user']['ID'];
        if($passwd==$passwdcheck){
            $hashpasswd = password_hash($passwd, PASSWORD_DEFAULT);
            $sqlupdate="update felhasznalo set jelszo='$hashpasswd' where ID=$id";
            $runupdate= $conn->query($sqlupdate);
            header("Location: ../php/profmodosit.php");
        }else{
            header('Location: ../php/jelszoupdate.php?&hiba=Nem egyeznek a beírt jelszavak!');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tatár Liliána, Kovács-Bodó Csenge">
    <link rel="stylesheet" href="../css/licsicss.css">
    <link rel="icon" href="../media/icon.jpg">
    <title>Jelszó módosítása</title>
</head>
<body>
<?php if(isset($_SESSION['user'])){ ?>
<div class="page-container">
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
            <a href="../html/index.html">Kijelentkezés👋</a>
            <q>Minden nap egy alma az orvost távol tartja.</q>
        </nav>
        <main>
            <section>
                <div>
                    <h1>Jelszó módosítása</h1>
                    <form style="width: 700px" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            if(isset($_GET['hiba'])){
                                echo "<p style='text-align: center; color: red; font-size: 20px'>{$_GET['hiba']}</p>";
                            }
                        }
                        ?>
                        <fieldset>
                            <label>Új jelszó (maximum 100 karakter): <input type="password" name="passwd" maxlength="100"/></label><br/>
                            <p style="color: green; font-size: 15px"><b>A jelszónak tartalmaznia kell legalább egy nagybetűt, kisbetűt és számot.</b></p>
                            <label>Jelszó újra <input type="password" name="passwd-check"/></label><br/>
                            <div class="content-wrap" style="text-align: center">
                                <input type="submit" name="update" class="gomb button-regist" value="Jelszó módosítása"/>
                                <a style="padding: 10px 15px 10px 15px" class="link button-regist" href="../php/profil.php">Mégse</a>
                            </div>
                        </fieldset>
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
