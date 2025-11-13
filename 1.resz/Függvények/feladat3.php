<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Általános függvények gyakorlása</title>
</head>
<body>

    <h1>3. feladat: Általános függvények gyakorlása</h1>
    <p>📝 3. feladat: Általános függvények gyakorlása
    Leírás:
    Készíts egy függvényt, ami két számot kap paraméterként.
    A függvény:
    kiszámolja az összegüket,
    a különbségüket,
    a szorzatukat,
    és visszaadja az összes eredményt egy asszociatív tömbben (pl. ["osszeg" => ..., "kulonbseg" => ..., "szorzat" => ...]).
    Írd ki a függvény visszatérési értékét szépen formázva.
    Cél: paraméterek kezelése, visszatérési értékek, asszociatív tömbök és függvények kombinálása.</p>

    <?php

    function Szamol($a, $b){
        $osszeg = $a + $b; //kiszámolja az összegüket
        $kivonas = $a - $b; //a különbségüket
        $szorzat = $a * $b; //a szorzatukat

        return[
            "osszeg" => $osszeg,
            "kivonas" => $kivonas,
            "szorzat" => $szorzat
        ];
    }

    $a = 5;
    $b = 7;

    $szam = Szamol($a, $b);
    echo 
    "<table>
        <tr>
            <th>Összeg</th>
            <td>" . $szam["osszeg"] . "</td>
        </tr>

        <tr>
            <th>Különbség</th>
            <td>" . $szam["kivonas"] . "</td>
        </tr>

        <tr>
            <th>Szorzat</th>
            <td>" . $szam["szorzat"] . "</td>
        </tr>
    </table>";


    ?>
    
</body>
</html>