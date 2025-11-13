<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizetés kiszámítása</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px
        }
    </style>
</head>
<body>
    <h1>💰 3. feladat: Fizetés kiszámítása</h1>
    <p>
        Képzeld el, hogy egy dolgozó havi fizetését számolod ki.
    Tárold a dolgozó nevét (szöveg),
    az óránkénti bérét (tizedes szám),
    a ledolgozott órák számát (egész szám),
    valamint egy logikai változót, ami azt jelzi, hogy kap-e bónuszt.

    Ezután számold ki a fizetést (óra × bér), és ha a bónusz igaz, adj hozzá egy meghatározott extra összeget (pl. 10%).
    Cél: logikai érték és számítások kombinálása, változók gyakorlása különböző típusokkal.
    </p>

    <?php
        $nev = "Keresztúri Hanna";
        $ber = 2050.5;
        $ora = 200;
        $bonusz = TRUE; 

        $fizetes = $ora * $ber;

        echo"
        <table>
            <tr>
                <th>Név</th>
                <th>Bér</th>
                <th>Óra</th>
            </tr>
            <tr>
                <td>". $nev ."</td>
                <td>". $ber." Ft</td>
                <td>". $ora." óra</td>
            </tr>
            <tr>
                <th>Fizetes</th>
                <th colspan=2 >". number_format($fizetes,0,","," ")." Ft</th>
            </tr>
            <tr>
                <th>Bónusszal</th>
                <th colspan=2>". number_format($bonusz ?  $fizetes = $fizetes * 1.1 : $fizetes,0,","," ") ." Ft</th>
            </tr>
        </table>"
        

    ?>






</body>
</html>