<?php

function szamologep(float $szam1, float $szam2,$muvelet): float{

    switch ($muvelet){
        case 1:
            return $szam1 + $szam2;
            break;

        case 2:
            return  $szam1 - $szam2;
            break;

        case 3:
            return $szam1 * $szam2;
            break;

        case 4:
            return $szam1 / $szam2;
            break;

        default:
            throw new Exception('Hiba');
    }
}

echo szamologep(5,15,1);
echo "<br>";
echo  szamologep(7.2,3.1,2);
echo "<br>";
echo  szamologep(5,9,3);
echo "<br>";
echo  szamologep(36,6,4);
