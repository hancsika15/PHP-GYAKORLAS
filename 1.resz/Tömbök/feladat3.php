<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osztályzatok kezelése</title>
</head>
<body>
    <h1>🏫3. feladat – Osztályzatok kezelése</h1>
    <p> 
    Leírás:
    Készíts egy multidimenziós tömböt, ahol a kulcs a diák neve,
    az érték pedig egy tömb, ami a jegyeit tartalmazza (pl. [5, 4, 3, 5]).
    Készíts egy függvényt, ami:
    kiszámolja minden tanuló átlagát,
    és visszaadja a legjobb átlagú tanuló nevét és átlagát.
    🎯 Cél: bejárás, számítás, tömbkezelés és asszociatív kulcsok kombinálása.</p>

    <?php

        $tanulok = array(
            "Hanna" =>
                [5,4,3,2,1],
            "Ákos" =>
                [5,5,4,2,1]
        );

        function tanulo($tanulok){

            foreach ($tanulok as $t => $tanulo) {
                echo "<h2>". $t .":</h2>";
                echo "<p>Jegyeik: " . implode('; ',$tanulo) ."</p>";
            }
        }

        $tanuloInfo = tanulo($tanulok);
    ?>

</body>
</html>