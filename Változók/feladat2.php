<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egyszerű bevásárlólista</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px
        }
    </style>
</head>
<body>
    <h1>2. feladat: Egyszerű bevásárlólista</h1>
    <p>2. feladat: Egyszerű bevásárlólista
    Képzeld el, hogy készítesz egy kis programot a bevásárláshoz.
    Hozz létre változókat, amelyek tárolják három termék nevét (szöveg) és az árukat (tizedes szám).
    Számold ki a teljes összeget, majd készíts egy új változót, amelyben eltárolod az átlagárat.
    A végén jelenítsd meg a lista tartalmát és a kiszámolt értékeket.
    Cél: gyakorolni a szöveges és numerikus adatok kezelését, valamint a számolást változókkal.</p>

    <?php
    $termek1 = "Alma";
    $ar1 = "500";

    $termek2 = "Körte";
    $ar2 = "700";

    $termek3 = "Tej";
    $ar3 = "275";

    $osszeg = $ar1 + $ar2 + $ar3;
    $atlag = $osszeg / 3; 

    echo 
    "<table>
        <tr>
            <th>Termék</th>
            <th>Ár</th>
        </tr>
        <tr>
            <td>". $termek1 ."</td>
            <td>". $ar1." Ft</td>
        </tr>
        <tr>
            <td>". $termek2 ."</td>
            <td>". $ar2." Ft</td>
        </tr>
        <tr>
            <td>". $termek3 ."</td>
            <td>". $ar3." Ft</td>
        </tr>
        <tr>
            <td>Összesen</td>
            <td>". $osszeg." Ft</td>
        </tr>
        <tr>
            <td>Átlag ár</td>
            <td>". round($atlag)." Ft</td>
        </tr>

    </table>";


    
    
    ?>
</body>
</html>