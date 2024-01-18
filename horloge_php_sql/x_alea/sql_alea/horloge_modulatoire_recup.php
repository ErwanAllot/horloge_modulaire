<?php

$reponse = $data_base->query
("SELECT * FROM horloge_modulatoire
WHERE nombre = $serie_al");
$donnee = $reponse->fetch();
$id_de_la_spirale = $donnee['id'];
$cycle = $donnee['cycle'];
$nombre = $donnee['nombre'];
$angle = $donnee['angle'];
$factorisation_du_nombre = $donnee['factorisation_du_nombre'];
$nature_du_nombre = $donnee['nature_du_nombre'];
$reponse->closeCursor();

?>