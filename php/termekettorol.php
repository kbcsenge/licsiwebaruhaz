<?php
$conn = "";
require "connect.php";
session_start();
$id=$_SESSION['user']['ID'];
$rendelesekSzama = "SELECT rendelesekszama FROM felhasznalo WHERE ID=$id";
$rendelesekSzamaResult = $conn->query($rendelesekSzama);
$rendelesekSzamaRow = $rendelesekSzamaResult->fetch_assoc();
$rendelesekSzama = $rendelesekSzamaRow['rendelesekszama'];

$ujRendelesekSzama = $rendelesekSzama + 1;
$updateRendelesekSzamaQuery = "UPDATE felhasznalo SET rendelesekszama = $ujRendelesekSzama WHERE ID = $id";
$conn->query($updateRendelesekSzamaQuery);

$sqlkosar="DELETE FROM kosar WHERE felhasznalo_id=$id";
$runsql = $conn->query($sqlkosar);

header("Location: ../php/megrendelve.php");
?>