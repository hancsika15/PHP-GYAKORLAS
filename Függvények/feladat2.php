<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>📝 2. feladat: Tömb függvények gyakorlása</h1>
    <p>Hozz létre egy tömböt, ami 5-6 kedvenc ételed nevét tartalmazza.
    Készíts egy függvényt, ami:
    visszaadja a tömb hosszát (hány elem van benne),
    hozzáad egy új ételt a tömbhöz,
    rendezi a tömböt ábécé szerint,
    és visszaadja a teljes tömböt.
    Cél: tömbök kezelése, elemek hozzáadása, rendezés, függvények használata tömbökkel.</p>


    <?php

        $etelek = array("Gyros", "Bolognai spagetti", "Húsos palacsinta", "Szendvics", "Rakott csirke");

        function etelInfo($etelek){
            $elemekSzama = count($etelek);  //visszaadja a tömb hosszát (hány elem van benne)
            $ujTetel = "Töltött káposzta";
            $etelek[] = $ujTetel;  //hozzáad egy új ételt a tömbhöz
            sort($etelek); //rendezi a tömböt ábécé szerint


            return[
                "elemekSzama" => $elemekSzama,
                "ujTetel" => $ujTetel,
                "etelek" => $etelek
            ];
        }

        $kaja = etelInfo($etelek);
        echo 
        "<p>Elemek száma: " . $kaja["elemekSzama"] . "</p>" . 
        "<p>Új tétel: " . $kaja["ujTetel"] . "</p>". 
        "<p>Abc sorrend: " .  implode(' , ',$kaja["etelek"]) . "</p>";

    ?>


</body>
</html>