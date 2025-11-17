<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asszociatív tömbök gyakorlása</title>
</head>
<body>

<h1>1) Asszociatív tömbök gyakorlása</h1>
<p>Készíts egy feladatot, ahol van egy terméklista, ilyen infókkal egy-egy elemben:
név
ár
kategória
raktárkészlet
Feladatleírások:
Tárold el min. 5 termék adatait asszociatív tömbként (egy nagy tömbben több kisebb asszociatív tömb).
Készíts műveleteket:
Számold ki, hány termék van összesen.
Listázd ki (logikailag) csak a „ruha” kategóriát.
Derítsd ki, van-e olyan termék, aminek a neve tartalmazza a „Pro” szót.
Ellenőrizd, hogy minden terméknek nagyobb-e a raktárkészlete 0-nál.
Ez mind tökéletes alap lesz a tömbfüggvények gyakorlásához.</p>


<?php
    $termekek = array
    (
        1 => array( 
            "nev" => "Samsung TV",
            "ar" => 70000,
            "kategoria" => "elektronikai eszköz",
            "raktarkeszlet" => 5
        ),
        2 => array( 
            "nev" => "Dagasztógép",
            "ar" => 40000,
            "kategoria" => "konyhai kisgép",
            "raktarkeszlet" => 6
        ),
        3 => array( 
            "nev" => "Mikrohullámúsütő",
            "ar" => 15000,
            "kategoria" => "konyhai kisgép",
            "raktarkeszlet" => 2
        ),
        4 => array( 
            "nev" => "Sütő",
            "ar" => 75000,
            "kategoria" => "konyhai gép",
            "raktarkeszlet" => 4
        ),
        5 => array( 
            "nev" => "Iphone",
            "ar" => 80000,
            "kategoria" => "elektronikai eszköz",
            "raktarkeszlet" => 0
        )
    );

    //Számold ki, hány termék van összesen.
    echo "Az elérhető termékek: ".count($termekek);

    //Listázd ki (logikailag) csak a „elektronikai eszközök” kategóriát.
    echo "<p>Az elektronikai eszközök:</p>";
    echo "<ul>";
    foreach ($termekek as $t) {
        if ($t["kategoria"] == "elektronikai eszköz") {
            echo "<li>".$t["nev"]."</li>";
        }
    }
    echo "</ul>";

    $van =  FALSE;
    foreach ($termekek as $t) {
        if(str_contains($t["nev"], "Pro"))  $van = TRUE; break;
    };

    //Derítsd ki, van-e olyan termék, aminek a neve tartalmazza a „Pro” szót.
    echo ($van 
    ?  "<p>A termékek között van olyan aminek a neve tartalmazza a \"Pro\" szót</p>" 
    : "<p>A termékek között nincs olyan aminek a neve tartalmazza a \"Pro\" szót</p>");

    //Ellenőrizd, hogy minden terméknek nagyobb-e a raktárkészlete 0-nál.
    $null = array();
    foreach ($termekek as $t) {
        if($t["raktarkeszlet"] == 0){
            array_push($null,$t["nev"]);
        }
    }
    echo "<p>Hiányzó termék(ek): <br>" . implode($null) . "</p>";
?>





    
</body>
</html>