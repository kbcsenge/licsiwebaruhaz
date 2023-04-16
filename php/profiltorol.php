<?php
$conn = "";
require "connect.php";
session_start();
$id=$_SESSION['user']['ID'];
$email=$_SESSION['user']['email'];
echo $email;
$sqlkosar="delete from kosar where felhasznalo_id=$id";
$runsql = $conn->query($sqlkosar);
if (file_exists("../media/profilkepek/" . $email . ".jpg")) {
    unlink("../media/profilkepek/" . $email . ".jpg");
}
$sqlfel="delete from felhasznalo where ID=$id";
$runfel = $conn->query($sqlfel);
header("Location: ../php/logout.php");
?>