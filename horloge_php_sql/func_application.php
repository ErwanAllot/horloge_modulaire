<?php

    $angle_de_reference = 0;
    $pi = pi();
    $nombre_de_parts_du_gateau = 2; // IMPORTANT
    $angle = 0;
    $angle_de_reference = 0;
    $ticTac = 0;

    $facteurs_et_puissance = [];
    $factorisation_du_nombre = '';

    $nbr_de_depart = 2; // IMPORTANT
    $nombre = 1;

    $cycle = 1;

    $angle = 0;
    $angle_de_reference = 0;
    $ticTac = 0;  

    function reajustement_du_tictac_et_des_angles_pour_le_cycle(){

        global $angle_de_reference;
        global $pi;
        global $nombre_de_parts_du_gateau;
        global $angle;
        global $angle_de_reference;
        global $ticTac;

        $angle_de_reference = 2*$pi/$nombre_de_parts_du_gateau;
        $angle = $angle_de_reference / 2;
        $ticTac = 0;
    }

    function calcul_du_nbr_de_part_de_gateau(){

        global $facteurs_et_puissance;
        global $factorisation_du_nombre;
        global $nombre_de_parts_du_gateau;

        factorisation_du_cycle();
        $facteurs_et_puissance = preg_split("/[.\^]/", $factorisation_du_nombre);
        if (count($facteurs_et_puissance) == 2){
            $nombre_de_parts_du_gateau = $nombre_de_parts_du_gateau * $facteurs_et_puissance[0];
        }
        if (count($facteurs_et_puissance) > 2){
            $nombre_de_parts_du_gateau = $nombre_de_parts_du_gateau;
        }
    }

    function nouveau_nbr_de_depart(){

        global $nbr_de_depart;
        global $nombre_de_parts_du_gateau;
        global $nombre;

        $nbr_de_depart = $nbr_de_depart + $nombre_de_parts_du_gateau; 
        $nombre = $nbr_de_depart;
    }

    function reinitialisation_des_variables_pour_le_nouveau_cycle(){

        global $cycle;

        $cycle++;
        nouveau_nbr_de_depart();
        calcul_du_nbr_de_part_de_gateau();
        reajustement_du_tictac_et_des_angles_pour_le_cycle();
    }

    function incrementation_de_angle_et_tictac(){

        global $angle;
        global $angle_de_reference;
        global $ticTac;

        $angle += $angle_de_reference;
        $ticTac++;
    }

?>