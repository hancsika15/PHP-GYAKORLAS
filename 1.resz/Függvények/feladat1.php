<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String függvények gyakorlása</title>
</head>
<body>
    <h1> 1. feladat: String függvények gyakorlása</h1>
    <p>
        Hozz létre egy változót, ami a kedvenc filmed címét tartalmazza.
        Készíts egy függvényt, ami:
        nagybetűssé alakítja a címet,
        megszámolja a karakterek számát,
        és kiírja, hogy a cím hány szótagból (szókból) áll.
        A függvény visszaadhatja az összes információt egy tömbben vagy egy szép szövegként.
        Cél: string manipuláció, karakter- és szószámlálás, függvényírás gyakorlása.
    </p>
    
    <?php

        $cim = "Ready Player One";

        function film($cim){
            $nagybetus = strtoupper($cim);
            $betukSzama = strlen($cim);
            $szavakSzama = str_word_count($cim);

            return[
                "nagybetus" => $nagybetus,
                "betukszama" => $betukSzama,
                "szavakSzama" => $szavakSzama
            ];
        }

        $info = film($cim);
        echo "
        <br>Nagybetűs: " . $info["nagybetus"] . 
        "<br>Betűk száma: " . $info["betukszama"] . 
        "<br>Szavak száma: " . $info["szavakSzama"];

        
    ?>
</body>
</html>