<?php
$conn = "";
require "connect.php";
session_start();
$id=$_SESSION["user"]["ID"];
if (isset($_POST['alma'])) {
    $mennyiseg = $_POST['mennyisegalma'];
    $nev = "Alma";
    $ar = "700";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegalma']) || $_POST['mennyisegalma'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
} elseif (isset($_POST['szilva'])) {
    $mennyiseg = $_POST['mennyisegszilva'];
    $nev = "Szilva";
    $ar = "800";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (isset($_POST['szilva']) && (empty($_POST['mennyisegszilva']) || $_POST['mennyisegszilva'] == '0')) {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
} elseif (isset($_POST['oszibarack'])) {
    $mennyiseg = $_POST['mennyisegoszibarack'];
    $nev = "Őszibarack";
    $ar = "630";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegoszibarack']) || $_POST['mennyisegoszibarack'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
} elseif (isset($_POST['banan'])) {
    $mennyiseg = $_POST['mennyisegbanan'];
    $nev = "Banán";
    $ar = "750";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegbanan']) || $_POST['mennyisegbanan'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
} elseif (isset($_POST['eper'])) {
    $mennyiseg = $_POST['mennyisegeper'];
    $nev = "Eper";
    $ar = "520";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegeper']) || $_POST['mennyisegeper'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['ananasz'])) {
    $mennyiseg = $_POST['mennyisegananasz'];
    $nev = "Ananász";
    $ar = "900";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if(empty($_POST['mennyisegananasz']) || $_POST['mennyisegananasz'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['gorogdinnye'])) {
    $mennyiseg = $_POST['mennyiseggorogdinnye'];
    $nev = "Görögdinnye";
    $ar = "560";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyiseggorogdinnye']) || $_POST['mennyiseggorogdinnye'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['kivi'])) {
    $mennyiseg = $_POST['mennyisegkivi'];
    $nev = "Kivi";
    $ar = "410";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegkivi']) || $_POST['mennyisegkivi'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['korte'])) {
    $mennyiseg = $_POST['mennyisegkorte'];
    $nev = "Körte";
    $ar = "480";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegkorte']) || $_POST['mennyisegkorte'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['licsi'])) {
    $mennyiseg = $_POST['mennyiseglicsi'];
    $nev = "Licsi";
    $ar = "940";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyiseglicsi']) || $_POST['mennyiseglicsi'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['mandarin'])) {
    $mennyiseg = $_POST['mennyisegmandarin'];
    $nev = "Mandarin";
    $ar = "470";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegmandarin']) || $_POST['mennyisegmandarin'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['narancs'])) {
    $mennyiseg = $_POST['mennyisegnarancs'];
    $nev = "Narancs";
    $ar = "700";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegnarancs']) || $_POST['mennyisegnarancs'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['szolo'])) {
    $mennyiseg = $_POST['mennyisegszolo'];
    $nev = "Szőlő";
    $ar = "1550";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegszolo']) || $_POST['mennyisegszolo'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/gyumolcs.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['paradicsom'])) {
    $mennyiseg = $_POST['mennyisegparadicsom'];
    $nev = "Paradicsom";
    $ar = "700";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegparadicsom']) || $_POST['mennyisegparadicsom'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['paprika'])) {
    $mennyiseg = $_POST['mennyisegpaprika'];
    $nev = "Paprika";
    $ar = "1000";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegpaprika']) || $_POST['mennyisegpaprika'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['repa'])) {
    $mennyiseg = $_POST['mennyisegrepa'];
    $nev = "Répa";
    $ar = "400";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegrepa']) || $_POST['mennyisegrepa'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['gyoker'])) {
    $mennyiseg = $_POST['mennyiseggyoker'];
    $nev = "Gyökér";
    $ar = "300";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyiseggyoker']) || $_POST['mennyiseggyoker'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['burgonya'])) {
    $mennyiseg = $_POST['mennyisegburgonya'];
    $nev = "Burgonya";
    $ar = "500";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegburgonya']) || $_POST['mennyisegburgonya'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['hagyma'])) {
    $mennyiseg = $_POST['mennyiseghagyma'];
    $nev = "Hagyma";
    $ar = "600";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyiseghagyma']) || $_POST['mennyiseghagyma'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['kaposzta'])) {
    $mennyiseg = $_POST['mennyisegkaposzta'];
    $nev = "Káposzta";
    $ar = "750";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegkaposzta']) || $_POST['mennyisegkaposzta'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['lilahagyma'])) {
    $mennyiseg = $_POST['mennyiseglilahagyma'];
    $nev = "Lilahagyma";
    $ar = "240";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyiseglilahagyma']) || $_POST['mennyiseglilahagyma'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['padlizsan'])) {
    $mennyiseg = $_POST['mennyisegpadlizsan'];
    $nev = "Padlizsán";
    $ar = "430";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegpadlizsan']) || $_POST['mennyisegpadlizsan'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['retek'])) {
    $mennyiseg = $_POST['mennyisegretek'];
    $nev = "Retek";
    $ar = "550";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegretek']) || $_POST['mennyisegretek'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['uborka'])) {
    $mennyiseg = $_POST['mennyiseguborka'];
    $nev = "Uborka";
    $ar = "450";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyiseguborka']) || $_POST['mennyiseguborka'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['pritaminpaprika'])) {
    $mennyiseg = $_POST['mennyisegpritaminpaprika'];
    $nev = "Pritaminpaprika";
    $ar = "700";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegpritaminpaprika']) || $_POST['mennyisegpritaminpaprika'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['salata'])) {
    $mennyiseg = $_POST['mennyisegsalata'];
    $nev = "Saláta";
    $ar = "250";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegsalata']) || $_POST['mennyisegsalata'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
    }
}elseif (isset($_POST['cukkini'])) {
    $mennyiseg = $_POST['mennyisegcukkini'];
    $nev = "Cukkini";
    $ar = "460";
    $letezik = "SELECT * FROM kosar WHERE felhasznalo_id='$id' AND Termek='$nev'";
    $result = mysqli_query($conn, $letezik);
    if (empty($_POST['mennyisegcukkini']) || $_POST['mennyisegcukkini'] == '0') {
        $_SESSION['hiba'] = "A mennyiség mező nem lehet üres vagy nulla.";
        header("Location: ../php/zoldseg.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mennyiseg += $row['Mennyiseg'];
        $sql = "UPDATE kosar SET Mennyiseg='$mennyiseg' WHERE felhasznalo_id='$id' AND Termek='$nev'";
        mysqli_query($conn, $sql);
    } else {
        $sql = "INSERT INTO kosar (felhasznalo_id, Termek, Mennyiseg, egyseg_ar) VALUES ('$id', '$nev', '$mennyiseg', '$ar')";
        mysqli_query($conn, $sql);
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
    <title>Kosár</title>
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
                <a href="../php/zoldseg.php">Zöldségek🍅</a>
                <a href="../php/gyumolcs.php">Gyümölcsök🍎</a>
                <a href="../php/kosarba.php" class="active">Kosár🛒</a>
                <a href="../php/felhasznalok.php">Felhasználók👥</a>
                <a href="../php/profil.php">Profil👤</a>
                <a href="../html/index.html">Kijelentkezés👋</a>
                <q>Minden nap egy alma az orvost távol tartja.</q>
            </nav>
            <main>
                <section>
                    <div>
                        <h1>Kosár</h1>
                        <?php
                        $id=$_SESSION["user"]["ID"];
                        $sql="select Termek, Mennyiseg, egyseg_ar FROM kosar WHERE felhasznalo_id=$id";
                        $sql2="SELECT COUNT(*) FROM kosar WHERE felhasznalo_id=$id";

                        $run2 = $conn->query($sql2);
                        $row2 = mysqli_fetch_array($run2);

                        if($row2[0] == 0){
                            echo "<h2>A kosár jelenleg üres.</h2>";
                            echo '<button class="gomb button-regist" onclick="window.location.href = \'../php/ajanlo.php\';">Vásárlás folytatása</button>';
                        } else {
                            $run = $conn->query($sql);
                            echo '<table class="center" style="width: 70%;">';
                            echo '<tr>
                                    <th style="font-size: 20px; text-align: left;">Termék neve</th>
                                    <th style="font-size: 20px; text-align: center;">Mennyiség</th>
                                    <th style="font-size: 20px;text-align: center;">Teljes ár</th>
                                    <th style="font-size: 20px; text-align: center;">Mennyiség csökkentése</th>
                                    </tr>';
                            $vegOsszeg = 0;
                            while( $res = mysqli_fetch_assoc($run)){
                                $mennyiseg = $res["Mennyiseg"];
                                $termek = $res["Termek"];
                                $osszAr = $res["egyseg_ar"];
                                $fizetendo = $mennyiseg * $osszAr;
                                $url = "../php/csokkentes.php?mennyiseg=$mennyiseg&termek=$termek";
                                echo '<tr>
                                <td style="font-size: 20px; text-align: left;">'. $res["Termek"] .'</td>
                                <td style="font-size: 20px; text-align: center;">'. $res["Mennyiseg"].' Kg</td>
                                <td style="font-size: 20px; text-align: center;">'. $fizetendo.' Ft</td>
                                <td style="font-size: 20px; text-align: center">
                                    <a class="link button-regist" style="padding: 10px 15px 10px 15px" href="'.$url.'">Csökkentés eggyel</a>
                                </td>
                                </tr>';
                                $vegOsszeg += $fizetendo;

                            }
                            echo '</table>';
                            echo '<p style="font-size: 20px;">Összesen fizetendő: '. $vegOsszeg . 'Ft</p>';
                            echo '<button class="gomb button-regist" onclick="window.location.href = \'../php/termekettorol.php\';">Rendelés feladása</button>';
                            echo '<button class="gomb button-regist" onclick="window.location.href = \'../php/ajanlo.php\';">Vásárlás folytatás</button>';
                        }
                        ?>
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
