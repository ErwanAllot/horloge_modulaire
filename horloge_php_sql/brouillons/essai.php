<?php

include 'maths/factorisation.php';


$nom_de_la_base_de_donnees = 'horloge';



include 'sql/dataBase.php';
// include 'sql/horloge_modulatoire_destroy.php';
// include 'sql/horloge_modulatoire_create_table.php';

include 'application.php';




echo '
<style>
body{
    background-color: rgb(20,20,20);
    color: rgb(200,200,200);
}
</style>
';



$nombre = 2*3*7*7;
factorisation_du_nombre();


echo '<br>';
echo $nombre;
echo '<br>';
echo $factorisation_du_nombre;


$nombre = 5*4*7*6;
factorisation_du_nombre();


echo '<br>';
echo $nombre;
echo '<br>';
echo $factorisation_du_nombre;

?>