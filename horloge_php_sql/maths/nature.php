<?php

$facteurs_et_puissance = [];
$nature_du_nombre = '';


function nature_du_nombre(){
    global $nombre;
    global $factorisation_du_nombre;

    global $facteurs_et_puissance;
    global $nature_du_nombre;


    $facteurs_et_puissance = [];
    $nature_du_nombre = '';

    $facteurs_et_puissance = preg_split("/[.\^]/", $factorisation_du_nombre);

    if (count($facteurs_et_puissance) == 2){
        if($facteurs_et_puissance[1] == 1){
            if ($nombre == 1){$nature_du_nombre = 'unique';}
            if ($nombre != 1){$nature_du_nombre = 'premier';}
        }
        if($facteurs_et_puissance[1] != 1){$nature_du_nombre = 'puissance';}
    }

    if (count($facteurs_et_puissance) == 4){
        if($facteurs_et_puissance[1] == 1 && $facteurs_et_puissance[3] == 1){
            $nature_du_nombre = 'semi_premier';
        }
        if($facteurs_et_puissance[1] != 1 || $facteurs_et_puissance[3] != 1){
            $nature_du_nombre = 'quelconque';
        }
    }

    if (count($facteurs_et_puissance) > 4){$nature_du_nombre = 'quelconque';}

}

?>