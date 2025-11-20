<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tömbkezelés – Dolgozók bérszámítás</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }
        table,tr,td,th {
            border: 0.5px solid gray;
            border-collapse: collapse;
            padding: 5px;
        }
        table {
            width: 100%;
        }

        .content{
            width: 70%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        tr:nth-child(1) {
            border-radius: 1rem 1rem 0 0;
        }

        th {
            background-color: gainsboro;
            padding: 15px;
            font-size: larger;
        }
        .problemBox{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .error{     
            background-color:red;
            border-radius: 1rem;
            padding: 15px;
            width: 15%;
            font-weight: bolder;
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>1) Tömbkezelés – Dolgozók bérszámítás 2.0 Feladat:</h1>
    <ul>
        <li>Asszociatív tömb dolgozókkal: név, órabér, heti órák.</li>
        <li>Függvény heti és havi bér kiszámítására.</li>
        <li>HTML táblázat: név, heti órák, heti bér, havi bér.</li>
        <li>Ha van 0 munkaóra, figyelmeztetés.</li>
    </ul>

    <div class="container">
        <div class="content">
            <?php
            $dolgozok = array(
                1 => [
                    "nev" => "Hanna",
                    "oraber" => 2050,
                    "heti orak" => array(40, 40, 0, 32)
                ],
                2 => [
                    "nev" => "Henrik",
                    "oraber" => 2100,
                    "heti orak" => array(40, 50, 0, 32)
                ],
                3 => [
                    "nev" => "Ákos",
                    "oraber" => 2100,
                    "heti orak" => array(40, 50, 0, 32)
                ]
            );

            function HetiBerek($dolgozok)
            {
                echo "<table>
                    <tr>
                        <th>Név</th>
                        <th>Órabér</th>
                        <th>Heti órák</th>
                        <th>Havi bér</th>
                    </tr>";


                echo '<div class="problemBox">';
                foreach ($dolgozok as $d) {
                    if (in_array(0, $d["heti orak"])) {
                        echo '
                        <div class="error">
                            <p>' . $d["nev"] . "-nél hibás óra lett érzékelve!</p>
                        </div>";
                    }
                }
                echo "</div>";

                foreach ($dolgozok as $d) {
                    echo "<tr>
                    <td>" . $d["nev"] . "</td>
                    <td>" . $d["oraber"] . " Ft</td>
                    <td>" . implode(', ', $d["heti orak"]) . "</td>
                    <td>" . number_format(array_sum($d["heti orak"]) * $d["oraber"], 0, ",", " ") . " Ft</td>
                </tr>";
                }

                echo "</table>";
            }

            $Info = HetiBerek($dolgozok);
            ?>
        </div>
    </div>


</body>

</html>