<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbName = "licsi";
$port = "3306";

$conn = new mysqli($server, $user, $pwd, $dbName, $port);

if ($conn -> connect_errno){
    die("Hiba a kapcsolat során! ".$conn->connect_error);
}
$conn -> set_charset("utf8");