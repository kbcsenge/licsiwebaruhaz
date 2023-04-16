<?php
$conn ="";
require "connect.php";
include "registprofilkep.php";
if(isset($_POST['regiszt'])){
    $minkor = 18;
    $kor = date_diff(date_create($_POST['date-of-birth']), date_create('today'))->y;
    if (!isset($_POST['full-name']) || trim($_POST['full-name']) === ""){
        header('Location: ../php/regist.php?&hiba=Teljes név megadása kötelező!');
    }
    else if (!isset($_POST['email']) || trim($_POST['email']) === ""){
        header('Location: ../php/regist.php?&hiba=E-mail cím megadása kötelező!');
    }
    else if (!isset($_POST['username']) || trim($_POST['username']) === ""){
        header('Location: ../php/regist.php?&hiba=Felhasználónév megadása kötelező!');
    }
    else if (!isset($_POST['passwd']) || trim($_POST['passwd']) === "" || !isset($_POST['passwd-check']) || trim($_POST['passwd-check']) === ""){
        header('Location: ../php/regist.php?&hiba=A jelszó és az ellenőrző jelszó megadása kötelező!');
    }
    else if (!isset($_POST['date-of-birth']) || trim($_POST['date-of-birth']) === ""){
        header('Location: ../php/regist.php?&hiba=Születési dátum megadása kötelező!');
    }
    else if (!isset($_POST['orszag']) || trim($_POST['orszag']) === ""){
        header('Location: ../php/regist.php?&hiba=Ország megadása kötelező!');
    }
    else if (!isset($_POST['sex']) || trim($_POST['sex']) === ""){
        header('Location: ../php/regist.php?&hiba=Nem megadása kötelező!');
    }
    else if(strlen($_POST['username'])<5){
        header('Location: ../php/regist.php?&hiba=A megadott felhasználónév túl rövid!');
    }
    else if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $_POST['passwd'])) {
        header('Location: ../php/regist.php?&hiba=A megadott jelszó formátuma nem megfelelő!');
    }
    else if($kor < $minkor) {
        header('Location: ../php/regist.php?&hiba=Ön nem töltötte még be a 18. életkorát, ezért regisztrációja sikertelen!');
    }else{
        $name=$_POST['full-name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $passwd=$_POST['passwd'];
        $passwdcheck=$_POST['passwd-check'];
        $birth=$_POST['date-of-birth'];
        $orszag=$_POST['orszag'];
        $nem=$_POST['sex'];
        $fajlfeltoltes_hiba = "";
        profilkepfeltoltes($email);
        if ($fajlfeltoltes_hiba !== "") {
            $hibak = $fajlfeltoltes_hiba;
            header('Location: ../php/regist.php?&hiba='.$hibak);
        }else{
            $exist1 = "select count(*) as mennyi1 from felhasznalo where felhasznalonev='$username'";
            $run1 = $conn->query($exist1);
            $res1 = mysqli_fetch_assoc($run1);
            $exist2 = "select count(*) as mennyi2 from felhasznalo where email='$email'";
            $run2 = $conn->query($exist2);
            $res2 = mysqli_fetch_assoc($run2);
            if($res1['mennyi1']>0 && $res2['mennyi2']==0){
                header('Location: ../php/regist.php?&hiba=Ez a felhasználónév már használt!');
            }else if($res1['mennyi1']==0 && $res2['mennyi2']>0) {
                header('Location: ../php/regist.php?&hiba=Ez az e-mail cím már használt!');
            }else if($res1['mennyi1']>0 && $res2['mennyi2']>0){
                header('Location: ../php/regist.php?&hiba=Ez a felhasználónév és e-mail cím már használt!');
            }else if ($res1['mennyi1']==0 && $res2['mennyi2']==0 && $passwd == $passwdcheck) {
                $hashpasswd = password_hash($passwd, PASSWORD_DEFAULT);
                $sql = "insert into felhasznalo values('','$username','$email','$hashpasswd', '$name','$birth','$orszag','$nem', '')";
                $runsql = $conn->query($sql);
                header("Location: ../php/login.php");
            } else {
                header('Location: ../php/regist.php?&hiba=Nem egyeznek a beírt jelszavak!');
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
    <title>Regisztráció</title>
</head>
<body>
<div id="page-container">
    <div class="content-wrap">
        <header>
            <img class="headerimage" src="../media/fokepjo.jpg" alt="Fejléc kép" title="Fejléc kép">
        </header>
        <nav class="menu">
            <a href="../html/index.html" >LICSI🙋</a>
            <a href="../html/egeszseg.html" >Miért fontos az egészséges életmód?🥕</a>
            <a href="../php/quiz.php">Teszteld tudásod!</a>
            <a href="../php/regist.php" class="active">Regisztráció🖊️</a>
            <a href="../php/login.php">Bejelentkezés👋</a>
            <q>Minden nap egy alma az orvost távol tartja.</q>
        </nav>
        <main>
            <section>
                <div>
                    <h1>Regisztráció</h1>
                    <p>Kérjük töltse ki az űrlapot az adataival!</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            if(isset($_GET['hiba'])){
                                echo "<p style='text-align: center; color: red; font-size: 20px'>{$_GET['hiba']}</p>";
                            }
                        }
                        ?>
                        <fieldset>
                            <label>Teljes név: <input type="text" name="full-name" maxlength="50" placeholder="Például: Kiss János" ></label><br>
                            <label>E-mail: <input type="email" name="email" placeholder="Például: kissjanos@gmail.com" ></label><br>
                            <label>Felhasználónév(minimum 5 karakter): <input type="text" name="username" maxlength="50" placeholder="Például: kissjanos" ></label><br>
                            <label>Jelszó (minimum 6 karakter): <input type="password" name="passwd" maxlength="30" ></label><br>
                            <p style="color: green; font-size: 15px"><b>A jelszónak tartalmaznia kell legalább egy nagybetűt, kisbetűt és számot.</b></p>
                            <label>Jelszó ismét: <input type="password" name="passwd-check" maxlength="100" ></label><br>
                            <label>Születési dátum: <input type="date" name="date-of-birth" ></label><br>
                            <p style="color: green; font-size: 15px"><b>Figyelem! Amennyiben Ön nem töltötte még be a 18. életévét, regisztrációra nem jogosult.</b></p>
                            <label for="country">Ország:</label>
                            <select id="country" name="orszag">
                                <option value="">Válasszon országot</option>
                                <option value="Ausztria">Ausztria</option>
                                <option value="Horvátország">Horvátország</option>
                                <option value="Magyarország">Magyarország</option>
                                <option value="Románia">Románia</option>
                                <option value="Szerbia">Szerbia</option>
                                <option value="Szlovákia">Szlovákia</option>
                                <option value="Szlovénia">Szlovénia</option>
                                <option value="Ukrajna">Ukrajna</option>
                            </select><br>
                            <p style="color: green">Nem:</p>
                            <label for="op1">Férfi:<input type="radio" id="op1" name="sex" value="férfi"></label>
                            <label for="op2">Nő:<input type="radio" id="op2" name="sex" value="nő"></label>
                            <label for="op3">Egyéb:<input type="radio" id="op3" name="sex" value="egyéb"><br></label>
							<label style="font-size: 20px;">Profilkép: <input type="file" name="profile-pic" accept="image/*"></label> <br>
                            <div class="flex-container">
                                <input type="submit" name="regiszt" class="gomb button-regist" value="Regisztráció"/>
                                <a class="link button-regist" href="../html/index.html">Mégse</a>
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
</body>
</html>