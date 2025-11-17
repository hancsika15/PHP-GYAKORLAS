<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-dimenziós tömb + egyszerű logika</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            padding:7px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>2) Multi-dimenziós tömb + egyszerű logika</h1>
    <p>Képzelj el egy osztály naplót, ahol minden diákhoz tartozik 3 jegy:
    név
    jegyek → tömb
    eletkor
    Feladatok:
    Készíts el minimum 3 diákot multi-dimenziós struktúrában.
    Feladatok:
    Számold ki minden diák átlagát.
    Találd meg, melyik diák kapta a legmagasabb jegyet.
    Készíts egy listát azokról, akik 4 fölötti átlagot értek el.
    Számold ki a csoport átlagát.
    Itt már simán fogsz tanulni cikluslogikát a tömbök között, de még baráti szinten.</p>

    <?php
        $tanulok = array(
            1 => array(
                "nev" => "Keresztúri Hanna",
                "jegyek" => array(4,5,4,5,3,4,2,4,4,4,5),
                "eletkor" => 19
            ),
            2 => array(
                "nev" => "Magos Henrik Milán",
                "jegyek" => array(4,5,4,5,3,4,5,4,4,4,5),
                "eletkor" => 20
            ),
            3 => array(
                "nev" => "Hornyák Ákos",
                "jegyek" => array(4,5,3,5,3,4,5,4,4,4,5),
                "eletkor" => 20
            )
        );

        echo 
        "<table>
            <tr>
                <th>Név</th>
                <th>Jegyek</th>
                <th>Életkor</th>
                <th>Átlag</th>              
            </tr>"
        ;

        foreach ($tanulok as $t) {
            $atlag = number_format(array_sum($t["jegyek"])/count($t["jegyek"]),2,'.');
            $jegyek = $t["jegyek"];
            rsort($jegyek);

            echo 
            "<tr>
                <td>".$t["nev"]."</td>
                <td>". implode(' ; ', $jegyek)."</td>
                <td>".$t["eletkor"]."</td>
                <td>".$atlag  ."</td>              
            </tr>";
        }
        echo "</table>";


        $LegjobbAtlagNev = "";
        $LegjobbAtlag = 0;
        $negyfelett = array();
        $atlagok = array();

        foreach($tanulok as $t){
            $atlag = number_format(array_sum($t["jegyek"])/count($t["jegyek"]),2,'.');
            array_push($atlagok, $atlag);

            if (array_sum($t["jegyek"])/count($t["jegyek"]) > $LegjobbAtlag) {
                $LegjobbAtlagNev = $t["nev"];
                $LegjobbAtlag = array_sum($t["jegyek"])/count($t["jegyek"]);   
            }

            if ($atlag >= 4) {
                array_push($negyfelett, $t["nev"]);
            }
        }

        echo "<p>4-es feletti átlagot ért el: <br>". implode("<br>",$negyfelett)."</p>";
        echo "<p>" . $LegjobbAtlagNev . " érte el a legjobb átlagot: " . number_format($LegjobbAtlag, 2, "."). "</p>";
        echo "<p>A csoport átlaga: ". array_sum($atlagok)/count($atlagok)."</p>";
        
    ?>
    
</body>
</html>