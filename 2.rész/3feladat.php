<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>3) Egyszerű saját függvények gyakorlása (paraméter + visszatérési érték)</h1>
    <p>Feladat:
    Hozz létre 3 különböző feladatot, ahol saját függvényt használnál:<br>
    1. Egy függvény, ami kap egy árat és visszaadja a 27% áfás árat
    → Használj paramétert és visszatérési értéket.<br>
    2. Például: „Szia Márk, remélem jó napod lesz!” — de legyen mindig más.<br>
    3. Függvény, ami kap egy számot és eldönti róla, hogy páros vagy páratlan</p>

<hr>
    <form method="POST">
        <legend>
            <label for="arNev">Ár:</label>
            <input type="text" name="ar" required>
        </legend>
        <br>
        <button type="submit">Küldes</button>
    </form>

    <?php

        function Afa($ar){
            $afasAr = $ar * 1.27;
            return number_format($afasAr,0, " ");
        }

        if (isset($_POST['ar']) && $_POST['ar'] !== '') {

            $ar = $_POST['ar'];
            $AfaInfo = Afa($ar);
    
            echo "<p>$ar ÁFA-s ára: $AfaInfo Ft</p>";  
        } 
    ?>
<hr>

    <form method="POST">
        <legend>
            <label for="nev">Név:</label>
            <input type="text" name="nev" required>
        </legend>
        <br>
        <button type="submit">Küldes</button>
    </form>

    <?php

        function Udvozles($nev){
            return "Szia ". $nev.", remélem jó napod lesz!";
        }

        if (isset($_POST['nev']) && $_POST['nev'] !== '') {

            $nev = $_POST['nev'];
            $UdvozlesInfo = Udvozles($nev);
            echo $UdvozlesInfo;   
        } 
    ?>
<hr>

    <form method="POST">
        <legend>
            <label for="szam">Szám:</label>
            <input type="number" name="szam" required>
        </legend>
        <br>
        <button type="submit">Küldes</button>
    </form>

    <?php

        function ParosParatlan($a){

            if ($a % 2 == 0) {
                return "Páros";
            }
            else return "Páratlan";
        }

        if (isset($_POST['szam']) && $_POST['szam'] !== '') {

            $szam = $_POST['szam'];
            $PvP = ParosParatlan($szam);
            echo $PvP;   
        } 
    ?>


</body>
</html>