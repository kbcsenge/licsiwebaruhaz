<?php
$conn = "";
require "connect.php";
session_start();
$id=$_SESSION["user"]["ID"];
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $mennyiseg= $_GET["mennyiseg"];
    $termek = $_GET["termek"];

    if($mennyiseg>1){
        $sql_kivonas="UPDATE kosar SET Mennyiseg=$mennyiseg-1 WHERE Termek='$termek' AND felhasznalo_id=$id";
        $run_sql_kivonas = $conn -> query($sql_kivonas);
        echo $run_sql_kivonas;
    }else{
        $sql_torol="DELETE FROM kosar WHERE Termek='$termek' AND felhasznalo_id=$id";
        $run_sql_torol=$conn->query($sql_torol);
    }
    header('Location:../php/kosarba.php');
}