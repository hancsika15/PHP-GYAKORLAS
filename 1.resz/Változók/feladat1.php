<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Személyi adatok kezelése</title>
</head>
<body>
    <h1>1. feladat: Személyi adatok kezelése</h1>
    <p>1. feladat: Személyi adatok kezelése
Készíts egy programot, amelyben többféle típusú változót hozol létre egy kitalált személy adataihoz:
    a neve (szöveg),
    az életkora (egész szám),
    a testmagassága (tizedes szám),
    hogy van-e jogosítványa (logikai érték),
    és hány testvére van (egész szám).
A feladat az, hogy minden változót külön hozz létre, majd írd ki az összes adatot egy áttekinthető formában (pl. „Név: …, Életkor: …” stb.).
Cél: gyakorolni, hogyan kell különböző típusú adatokat eltárolni és kiíratni.</p>

    <?php 
        $nev = "Keresztúri Hanna";
        $kor = 19;
        $testmagassag = 181.2;
        $jogositvany = TRUE;
        $testver = 0;

        echo "<p>Név:" . $nev . "</p>" . 
        "<p>Kor:" . $kor . "</p>" . 
        "<p>Testmagasság:" . $testmagassag . " cm </p>" . 
        "<p>Jogosítvány:" . ($jogositvany ? "Van" : "Nincs")  . "</p>" . 
        "<p>Testver:" . $testver . "</p>";
    ?>
    
</body>
</html>