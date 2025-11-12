<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Étlap több kategóriával</title>
</head>
<body>
    <h1>🍕 2. feladat – Étlap több kategóriával</h1>
    <p>
        Készíts egy tömböt, ami három kategóriát tartalmaz:
        "Levesek"
        "Főételek"
        "Desszertek"
        Mindegyik kategória tömbként tartalmazzon 2-3 ételt.
        Készíts egy függvényt, ami:
        kiírja az összes ételt kategóriánként,
        megszámolja, hány étel van összesen az étlapon.
        🎯 Cél: tömbök a tömbben, ciklusok egymásban (foreach a foreach-ben).
    </p>

    <?php
        $etlap = array(
            "levesek" => ["Borsókrém leves", "Csontleves", "Sütőtök leves"],
            "foetelek" => ["Rántotthús", "Rántott sajt", "Grill csirke"] ,
            "desszertek" => ["Palacsinta", "Goffri", "Fánk"]
        );

        function etel($etlap){

            return[
                "levesek" => $levesek,
                "foetelek" => $foetelek,
                "desszertek" => $desszertek
            ];
        }

        $etelInfo = etel($etlap);

        echo implode("," , $etelInfo["levesek"]);


    ?>
</body>
</html>