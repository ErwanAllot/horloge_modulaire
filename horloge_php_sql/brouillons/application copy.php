<?php

$pi = pi();

$cycle = 1;
$nombre = 1;
$angle = $pi;


factorisation_du_nombre();


echo '<br>';
echo $nombre;
echo '<br>';
echo $factorisation_du_nombre;
echo '<br>';

// $facteurs_et_puissance = preg_split("/[\s,]+/", "langage hypertexte, programmation");

$facteurs_et_puissance = preg_split("/[.\^]/", $factorisation_du_nombre);

echo $facteurs_et_puissance[0];
echo '<br>';
echo $facteurs_et_puissance[1];

$nature_du_nombre = 'unique';

include 'sql/horloge_modulatoire_injection.php';




echo '<br><br>==========================';


?>