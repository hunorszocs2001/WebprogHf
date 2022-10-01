<?php

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

function atalakit(&$tomb, $betu)
{
    switch ($betu) {
        case "kisbetus":
            foreach ($tomb as $kulcs => $ertek) {
                $tomb[$kulcs] = strtolower($ertek);
            }
            break;
        case "nagybetus":
            foreach ($tomb as $kulcs => $ertek) {
                $tomb[$kulcs] = strtoupper($ertek);
            }
            break;
    }
}


atalakit($szinek, "kisbetus");
print_r($szinek);
atalakit($szinek, "nagybetus");
print_r($szinek);