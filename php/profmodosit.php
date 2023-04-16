<?php
$conn = "";
require "connect.php";
session_start();
if(isset($_POST['update'])){
    if(!isset($_POST['full-name']) || trim($_POST['full-name']) === ""){
        header('Location: ../php/profmodosit.php?&hiba=Teljes név megadása kötelező!');
    }else if(!isset($_POST['email']) || trim($_POST['email']) === ""){
        header('Location: ../php/profmodosit.php?&hiba=E-mail cím megadása kötelező!');
    }else if(!isset($_POST['username']) || trim($_POST['username']) === ""){
        header('Location: ../php/profmodosit.php?&hiba=Felhasználónév megadása kötelező!');
    }else if(!isset($_POST['orszag']) || trim($_POST['orszag']) === ""){
        header('Location: ../php/profmodosit.php?&hiba=Ország megadása kötelező!');
    }else if(!isset($_POST['sex']) || trim($_POST['sex']) === ""){
        header('Location: ../php/profmodosit.php?&hiba=Nem megadása kötelező!');
    }else if(strlen($_POST['username'])<5){
        header('Location: ../php/profmodosit.php?&hiba=A megadott felhasználónév túl rövid!');
    }else{
        $name = $_POST['full-name'];
        $email = $_POST['email'];
        $username=$_POST['username'];
        $orszag = $_POST['orszag'];
        $nem = $_POST['sex'];
        $id=$_SESSION['user']['ID'];
        include "registprofilkep.php";
        $fajlfeltoltes_hiba = "";
        profilkepfeltoltes($email);
        if ($fajlfeltoltes_hiba !== "") {
            $hibak = $fajlfeltoltes_hiba;
            header('Location: ../php/profmodosit.php?&hiba='.$hibak);
        }else{
            $id=$_SESSION['user']['ID'];
            $adatok="select nev, email, felhasznalonev, jelszo, szuldatum, orszag, nem from felhasznalo where ID=$id";
            $runadatok = $conn->query($adatok);
            $res = mysqli_fetch_assoc($runadatok);
            if($username!=$res['felhasznalonev'] && $email==$res['email']){
                $exist = "select count(*) as mennyi from felhasznalo where felhasznalonev='$username'";
                $run = $conn->query($exist);
                $res = mysqli_fetch_assoc($run);
                if ($res['mennyi'] > 0) {
                    header('Location: ../php/profmodosit.php?&hiba=Ez a felhasználónév már használt!');
                } else{
                    $sql = "update felhasznalo set felhasznalonev='$username', email='$email', nev='$name', orszag='$orszag', nem='$nem' where ID=$id";
                    $runsql = $conn->query($sql);
                    header("Location: ../php/profil.php");
                }
            }else if($username==$res['felhasznalonev'] && $email!=$res['email']){
                $exist = "select count(*) as mennyi from felhasznalo where email='$email'";
                $run = $conn->query($exist);
                $res = mysqli_fetch_assoc($run);
                if ($res['mennyi'] > 0) {
                    header('Location: ../php/profmodosit.php?&hiba=Ez az e-mail cím már használt!');
                } else{
                    $sql = "update felhasznalo set felhasznalonev='$username', email='$email', nev='$name', orszag='$orszag', nem='$nem' where ID=$id";
                    $runsql = $conn->query($sql);
                    header("Location: ../php/profil.php");
                }
            }else if($username!=$res['felhasznalonev'] && $email!=$res['email']){
                $exist1 = "select count(*) as mennyi1 from felhasznalo where felhasznalonev='$username'";
                $run1 = $conn->query($exist1);
                $res1 = mysqli_fetch_assoc($run1);
                $exist2 = "select count(*) as mennyi2 from felhasznalo where email='$email'";
                $run2 = $conn->query($exist2);
                $res2 = mysqli_fetch_assoc($run2);
                if($res1['mennyi1']>0 && $res2['mennyi2']==0){
                    header('Location: ../php/profmodosit.php?&hiba=Ez a felhasználónév már használt!');
                }else if($res1['mennyi1']==0 && $res2['mennyi2']>0) {
                    header('Location: ../php/profmodosit.php?&hiba=Ez az e-mail cím már használt!');
                }else if($res1['mennyi1']>0 && $res2['mennyi2']>0){
                    header('Location: ../php/profmodosit.php?&hiba=Ez a felhasználónév és e-mail cím már használt!');
                }else{
                    $sql = "update felhasznalo set felhasznalonev='$username', email='$email', nev='$name', orszag='$orszag', nem='$nem' where ID=$id";
                    $runsql = $conn->query($sql);
                    header("Location: ../php/profil.php");
                }
            }else{
                $sql = "update felhasznalo set felhasznalonev='$username', email='$email', nev='$name', orszag='$orszag', nem='$nem' where ID=$id";
                $runsql = $conn->query($sql);
                header("Location: ../php/profil.php");
            }
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
    <title>Profilom módosítása</title>
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
                <a href="../html/index.html">Kijelentkezés👋</a>
                <q>Minden nap egy alma az orvost távol tartja.</q>
            </nav>
            <main>
                <section>
                    <div>
                        <h1>Profil módosítása</h1>
                        <form style="width: 700px" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                            <?php
                            $id=$_SESSION['user']['ID'];
                            $adatok="select nev, email, felhasznalonev, jelszo, szuldatum, orszag, nem from felhasznalo where ID=$id";
                            $runadatok = $conn->query($adatok);
                            $res = mysqli_fetch_assoc($runadatok);
                            ?>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                if(isset($_GET['hiba'])){
                                    echo "<p style='text-align: center; color: red; font-size: 20px'>{$_GET['hiba']}</p>";
                                }
                            }
                            ?>
                            <fieldset>
                                <label>Teljes név: <input type="text" name="full-name" maxlength="50" value="<?php  echo $res['nev']?>"/></label><br/>
                                <label>E-mail: <input type="email" name="email" value="<?php  echo $res['email']?>"/></label><br/>
                                <label>Felhasználónév(minimum 5 karakter): <input type="text" maxlength="15" name="username" value="<?php  echo $res['felhasznalonev']?>"/></label><br/>
                                <label for="country">Ország:
                                    <select id="country" name="orszag">
                                        <option value="">Válasszon országot</option>
                                        <option value="Ausztria" <?php echo ($res['orszag']=='Ausztria')?'selected':''?>>Ausztria</option>
                                        <option value="Horvátország" <?php echo ($res['orszag']=='Horvátország')?'selected':''?>>Horvátország</option>
                                        <option value="Magyarország" <?php echo ($res['orszag']=='Magyarország')?'selected':''?>>Magyarország</option>
                                        <option value="Románia" <?php echo ($res['orszag']=='Románia')?'selected':''?>>Románia</option>
                                        <option value="Szerbia" <?php echo ($res['orszag']=='Szerbia')?'selected':''?>>Szerbia</option>
                                        <option value="Szlovákia" <?php echo ($res['orszag']=='Szlovákia')?'selected':''?>>Szlovákia</option>
                                        <option value="Szlovénia" <?php echo ($res['orszag']=='Szlovénia')?'selected':''?>>Szlovénia</option>
                                        <option value="Ukrajna" <?php echo ($res['orszag']=='Ukrajna')?'selected':''?>>Ukrajna</option>
                                    </select>
                                </label><br/>
                                <p style="color: green">Nem:</p>
                                <label for="op1">Férfi:<input type="radio" id="op1" name="sex" value="férfi" <?php echo ($res['nem']=='férfi')?'checked="checked"':'' ?>/></label>
                                <label for="op2">Nő:<input type="radio" id="op2" name="sex" value="nő" <?php echo ($res['nem']=='nő')?'checked="checked"':'' ?>/></label>
                                <label for="op3">Egyéb:<input type="radio" id="op3" name="sex" value="egyéb" <?php echo ($res['nem']=='egyéb')?'checked="checked"':'' ?>/><br/></label><br>
                                <label style="font-size: 20px;">Profilkép: <input type="file" name="profile-pic" accept="image/*"/></label> <br/><br/>
                                <a style="color: green;font-size: 20px" href="../php/jelszoupdate.php">Jelszó módosítása</a><br>
                                <div style="text-align: center">
                                    <input type="submit" name="update" class="gomb button-regist" value="Profil módosítása"/>
                                    <a style="padding: 10px 15px 10px 15px" class="link button-regist" href="../php/profiltorol.php">Profil törlése</a>
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
