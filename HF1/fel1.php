<?php

$datum = date("w");

switch ($datum){
    case 0:
    echo "Ma Vasarnap van";
    break;
    case 1:
        echo "Ma Hetfo van";
        break;
    case 2:
        echo "Ma Kedd van";
        break;
    case 3:
        echo "Ma Szerda van";
        break;
    case 4:
        echo "Ma Csutortok van";
        break;
    case 5:
        echo "Ma PEntek van";
        break;
    case 6:
        echo "Ma Szombat van";
        break;
}

