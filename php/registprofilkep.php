<?php
$conn = "";
require "connect.php";
function profilkepfeltoltes($useremail) {
    global $fajlfeltoltes_hiba;

    if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
        $allowed_extensions = ["jpg"];
        $extension = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));

        if (in_array($extension, $allowed_extensions)) {
            if ($_FILES["profile-pic"]["error"] === 0) {
                if ($_FILES["profile-pic"]["size"] <= 31457280) {
                    $path = "../media/profilkepek/" . $useremail . "." . $extension;

                    if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $path)) {
                        $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
                    }
                } else {
                    $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
                }
            } else {
                $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
            }
        } else {
            $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!Kérem használjon JPG fájlt!";
        }
    }
}
?>