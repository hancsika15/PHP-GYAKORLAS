<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tömb + saját függvény combo</title>
</head>
<body>
    <h1>4) Tömb + saját függvény combo</h1>
    <p>
    Képzeld el, hogy van egy számlista: 12, 7, 30, 44, 3, 19...
    Feladat:
    Hozz létre 2 db saját függvényt:
    ami kiszámolja a tömb átlagát
    ami visszaad egy új tömböt, amiben csak a 10 feletti számok vannak
    A feladatban írd le, hogy mikor hívod meg őket és mire használod az eredményt.
    </p>

    <?php
        function Atlag($szamok){
            return array_sum($szamok)/count($szamok);
        }

        
        function Vissza($szamok){   
            $tiz = [];     
            for ($i=0; $i < Count($szamok) ; $i++) { 
               if ($szamok[$i] > 10) {
                $tiz[]  = $szamok[$i];
               }
            }  
            
            return $tiz;
        }


        $szamok = array(12, 7, 30, 44, 3, 19, 21, 26, 40); // 202 / 9 = 22,44
        $AtlagInfo = Atlag($szamok);
        $VisszaInfo = Vissza($szamok);
        echo round($AtlagInfo,2) . "<br>";
        sort($VisszaInfo); // helyben rendezi
        echo implode(',', $VisszaInfo);
    ?>
    
</body> 
</html>