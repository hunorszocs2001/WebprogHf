<?php
$array = ([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200']);
foreach ($array as $arrayItems){
    echo $arrayItems . " " . gettype($arrayItems) . " " . (is_numeric($arrayItems) ? "Igen<br>" : "Nem<br>");
}