<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tanulók adatai</title>
</head>
<body>
    <h1>🧩 1. feladat – Tanulók adatai</h1>
    <p>Készíts egy multidimenziós tömböt, ahol minden elem egy tanulót jelöl.
    Minden tanulóhoz tartozzon: név, életkor, és kedvenc tantárgy.
    Írj egy függvényt, ami:
    végigmegy a tanulókon,
    megszámolja, hány tanuló van összesen,
    és kiírja a legidősebb tanuló nevét és korát.
    🎯 Cél: bejárás ciklussal, többdimenziós adatok kezelése, függvényhasználat.</p>

    <?php
        $tanulok = array(
            array("nev" => "Hanna","kor" => 19,"kedvencTan" => "Irodalom"),
            array("nev" =>"Ákos","kor" => 20,"kedvencTan" => "Matematika"),
            array("nev" =>"Bogi","kor" => 21 ,"kedvencTan" => "Nyelvtan")
        );

        function Tanulo($tanulok){
            $letszam = count($tanulok); //megszámolja
            
            $max = 0;
            $neve = "";

            foreach($tanulok as $tanulo){
                if($tanulo["kor"] > $max){
                    $max = $tanulo["kor"];
                    $neve = $tanulo["nev"];
                }
            }

            return[
                "letszam" => $letszam,
                "legidosebbKor" => $max,
                "legidosebbNev" => $neve
            ];
        }

        $tanuloInfo = Tanulo($tanulok);
        echo "Tanulók száma: " . $tanuloInfo["letszam"];
        echo "<br>";
        echo "Legidősebb neve: " . $tanuloInfo["legidosebbNev"];
        echo "<br>";
        echo "Legidősebb kor: " . $tanuloInfo["legidosebbKor"];

    ?>
</body>
</html>