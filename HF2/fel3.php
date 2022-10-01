<?php

$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);
 foreach ($napok as $nyelv => $napokneve){
     echo $nyelv . " : ";
     foreach ($napokneve as $nap){
         echo " $nap, ";
     }
     echo "<br>";
 }
