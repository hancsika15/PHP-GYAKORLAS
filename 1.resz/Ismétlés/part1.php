<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1️⃣ rész - Ismétlés</title>
    <style>
        table,td,th,tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <section>
        <h3>1️⃣ Változók gyakorlása</h3>
        <?php

            $nev = "Hanna";
            $kor = 19;
            $magassag = 181;
            $vanJogositvany = TRUE;

            echo "<p>Nevem " . $nev .", ". $kor ." éves vagyok,". $magassag ."cm magas vagyok, jogosítványom". ($vanJogositvany ? " van" : " nincs")."</p>"
        ?>

        <hr>
    </section>
    
    <section>
        <h3>2️⃣ Tömbök gyakorlása</h3>
        <?php
            $filmek = ["Ready Player One", "Titanic", "Oscar", "A pápa örgödűzője", "A beavatott"];


            function FilmInfo($filmek){
                //Filmek megszámolva a tömbben
                echo "A filmek száma: ". count($filmek);

                //Sorköz
                echo "<br>";

                //Új film hozzáadása
                $ujFilm = "Gyűrűk ura";
                echo "Az új film: " . $ujFilm;
                $filmek[] = $ujFilm;

                //Sorköz
                echo "<br>";

                //Filmek kiírása
                echo ("A tömbben lévő filmek: ");
                echo implode(', ', $filmek);

                //Sorköz
                echo "<br>";

                //Filmek kiírása abc sorrendben
                echo ("A tömbben lévő filmek abc sorrendben: ");
                sort($filmek);
                echo implode(', ', $filmek);
                
            }

            $Info = FilmInfo($filmek);
        ?>
        <hr>
    </section>

    <section>
        <h3>3️⃣ Függvények gyakorlása</h3>
        <?php
            function Szamol($a, $b){

                $osszeg = $a + $b;
                $kivonas = $a - $b;
                $szorzat = $a * $b;
                $osztas = $a / $b;

                return[
                    "a" => $a,
                    "b" => $b,
                    "osszeg" => $osszeg,
                    "kivonas" => $kivonas,
                    "szorzat" => $szorzat,
                    "osztas" => $osztas
                ];
            };

            $szam = Szamol(5,7);
            echo "<p>a: ". $szam["a"] ." b: ". $szam["b"] ."</p>";
            echo 
            "<table>
                <tr>
                    <th>Összeg</th>
                    <th>Különbség</th>
                    <th>Szorzat</th>
                    <th>Osztás</th>
                </tr>
                <tr>
                    <td>".$szam["a"]."+".$szam["b"]."</td>
                    <td>".$szam["a"]."-".$szam["b"]."</td>
                    <td>".$szam["a"]."*".$szam["b"]."</td>
                    <td>".$szam["a"]."/".$szam["b"]."</td>
                </tr>
                <tr>
                    <th colspan=4>=</th>
                </tr>
                <tr>
                    <td>". $szam["osszeg"] . "</td>
                    <td>". $szam["kivonas"]."</td>
                    <td>". $szam["szorzat"]."</td>
                    <td>". round($szam["osztas"],2)."</td>
                </tr>
            </table>";

        ?>
        <hr>
    </section>

    <section>
        <h3>4️⃣ Összetett gyakorló feladat – Tanulói adatok</h3>
        <?php
            $tanulok = array(
                1 => array(
                    "nev" => "Hanna",
                    "kor" => 19,
                    "jegyek" => array(1,2,4,5)
                ),    
                2 => array(
                    "nev" => "Ákos",
                    "kor" => 20,
                    "jegyek" => array(2,4,3,5)
                ),
                3 => array(
                    "nev" => "Bogi",
                    "kor" => 21,
                    "jegyek" => array(1,2,3,4)
                )
            );

            function Tanulo($tanulok){

                //kiírás
                echo
                    "<table>
                        <tr>
                            <th>Név</th>
                            <th>Jegyek</th>
                            <th>Átlag</th>
                        </tr>";
                foreach ($tanulok as $t) {
                    echo
                        "<tr>
                            <td>". $t["nev"] . "</td>
                            <td>". implode(', ', $t["jegyek"]) . "</td>
                            <td>". array_sum($t["jegyek"])/count($t["jegyek"]) ."</td>
                        </tr>" ;   
                };
                echo "</table>";

                //Létszám
                $letszam = count($tanulok);

                //Legidősebb
                $maxKor = 0;
                $maxNev = "";
                foreach ($tanulok as $t) {
                    if ($t["kor"]>$maxKor) {
                        $maxKor = $t["kor"];
                        $maxNev = $t["nev"];
                    }
                }

                return[
                    "letszam" => $letszam,
                    "legidosebb" => [
                        "nev" => $maxNev,
                        "kor" => $maxKor
                    ]
                ];
            };

            $Info = Tanulo($tanulok);

            echo "<p>Tanulók száma:". $Info["letszam"] ."</p>";
            echo "<p>Legidősebb tanuló <strong>neve</strong>: ". $Info["legidosebb"]["nev"] ." és a <strong>kora</strong>:".$Info["legidosebb"]["kor"]  ."</p>"
        ?>
        <hr>
    </section>

    <section>
        <h3>5️⃣ Feladat – Dolgozói bérlista</h3>

        <?php 

        $dolgozok = array(
            1 => array(
                "nev" => "Keresztúri Hanna",
                "oraBer" => 2050,
                "munkaNapok" => [1,1,1,1,0,0,0,0,1,1,1,1] //8 ledolgozott nap
            ),
            2 => array(
                "nev" => "Naszály Klára",
                "oraBer" => 3500,
                "munkaNapok" => [1,1,1,1,0,0,0,0,0,0,0,0] //4 ledolgozott nap
            )
        );

        function Munka($dolgozok){
            echo "
            <table>
                <tr>
                    <th>Név</th>
                    <th>Ledolgozott napok (8 órás)</th>
                    <th>Alapbér</th>
                    <th>Fizetés</th>
                </tr>";
            foreach ($dolgozok as $d) {
                echo 
                "<tr>
                    <td>". $d["nev"] ."</td>
                    <td>".array_sum($d["munkaNapok"])."</td>
                    <td>".$d["oraBer"] ." Ft</td>
                    <td>".number_format(($d["oraBer"]*8)* array_sum($d["munkaNapok"]),2,'.',' ') ." Ft</td>
                </tr>";
            }
            echo "</table>";
        }
        $Info = Munka($dolgozok);
        ?>

        <hr>
    </section>

    <section>
        <h3>6️⃣Feladatleírás – 6. Többdimenziós tömb + függvény gyakorlás</h3>
        <p>Készíts egy tömböt, amely több dolgozó havi teljesítményét tárolja.
        Minden dolgozó adatai:
        nev – dolgozó neve
        oraBer – órabér
        munkaOra – egy tömb, amely egy hónap 4 hetének ledolgozott óráit tartalmazza
        (tehát pl. [40, 32, 28, 30])
        Feladatod:
        Írj egy függvényt, amely:
        Kiírja minden dolgozó:
        nevét
        heti óráit
        a hónap összes ledolgozott óráját
        a havi fizetését (összes óra × órabér)

        Kiszámolja:
        a cég összesen hány munkaórát dolgozott a hónapban
        melyik dolgozó dolgozta a legtöbb órát
        A függvény visszatér egy asszociatív tömbbel:
        osszesOra → teljes havi cégösszesítés
        legszorgalmasabb → a legtöbbet dolgozó neve és óra száma</p>

        <?php
            $dolgozok = array(
                1 => array(
                    "nev" => "Hanna",
                    "oraBer" => 2050,
                    "munkaOra" => array(
                        0 => 40,
                        1 => 32,
                        2 => 28,
                        3 => 30
                    )
                ),
                2 => array(
                    "nev" => "Henrik",
                    "oraBer" => 2050,
                    "munkaOra" => array(
                        0 => 5,
                        1 => 32,
                        2 => 28,
                        3 => 30
                    )
                )
            );


            function Dolgozo($dolgozok){

                echo "
                <table>
                        <tr>
                            <th>Név</th>
                            <th>Órabér</th>
                            <th>Heti órák</th>
                            <th>Ledolgozott órák</th>
                            <th>Havi fizetés</th>
                        </tr>";

                foreach ($dolgozok as $d) {
                    echo "
                        <tr>
                            <td>".$d["nev"]."</td>
                            <td>".$d["oraBer"]."</td>
                            <td>". implode(' ; ', $d["munkaOra"])."</td>
                            <td>". array_sum($d["munkaOra"])."</td>
                            <td>". number_format(array_sum($d["munkaOra"]) * $d["oraBer"],0,"."," ") ." Ft</td>
                        </tr>"
                    ;
                }
                echo "</table>";
                
            };

            $Info = Dolgozo($dolgozok);
        ?>
    </section>
</body>
</html>