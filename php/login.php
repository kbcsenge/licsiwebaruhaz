<?php
$conn = "";
require "connect.php";
if (isset($_POST['login'])) {
    if (!isset($_POST['email']) || trim($_POST["email"]) === ""){
        header('Location: ../php/login.php?&hiba=E-mail cím megadása kötelező!');
    }else if(!isset($_POST['passwd']) || trim($_POST["passwd"]) === ""){
        header('Location: ../php/login.php?&hiba=Jelszó megadása kötelező!');
    } else{
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $exist = "select count(*) as mennyi from felhasznalo where email='$email'";
        $run = $conn->query($exist);
        $res = mysqli_fetch_assoc($run);
        $jelszo = "select jelszo from felhasznalo where email='$email'";
        $runjelszo = $conn->query($jelszo);
        $resjelszo = mysqli_fetch_assoc($runjelszo);
        if ($res['mennyi'] > 0 && password_verify($passwd, $resjelszo['jelszo'])) {
            $sql = "select * from felhasznalo where email='$email'";
            $runsql = $conn->query($sql);
            $ressql = mysqli_fetch_assoc($runsql);
            session_start();
            $_SESSION['user'] = $ressql;
            header("Location: ../php/ajanlo.php");
            if (!isset($_COOKIE["latogato"])){
                setcookie("latogato", 1);
            }else {
                setcookie("latogato", $_COOKIE["latogato"]+1);
            }
        } else {
            header('Location: ../php/login.php?&hiba=Hibás e-mail cím vagy jelszó!');
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
    <title>Belépés</title>
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
            <a href="../php/regist.php">Regisztráció🖊️</a>
            <a href="../php/login.php" class="active">Bejelentkezés👋</a>
            <q>Minden nap egy alma az orvost távol tartja.</q>
        </nav>
        <main>
            <section>
                <div>
                    <h1>Bejelentkezés</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            if(isset($_GET['hiba'])){
                                echo "<p style='text-align: center; color: red; font-size: 20px'>{$_GET['hiba']}</p>";
                            }
                        }
                        ?>
                        <fieldset>
                            <label>E-mail cím: <input type="email" name="email"  placeholder="Írja be regisztrált e-mail címét!"></label><br>
                            <label>Jelszó: <input type="password" name="passwd" placeholder="Írja be jelszavát!" ></label><br>
                            <div class="flex-container">
                                <input type="submit" name="login" class="gomb button-regist" value="Belépés"/>
                                <a class="link button-regist" href="../html/index.html">Mégse</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div>
                    <p>Nincs még fiókja?</p>
                    <button class="gomb button-regist" onclick="window.location.href = '../php/regist.php';">Regisztráljon!</button>
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
