<?php
$posicion="arriba";
switch ($posicion){
    case "arriba":
        echo $posicion;
        break;

    case "abajo":
        echo $posicion;
        break;

    default:
        echo "La variable contiene otro valor distinto de arriba y abajo";
}

?>