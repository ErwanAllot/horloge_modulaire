<?php

// ce n'est pas encore optimisé pour des grands nombres
// demander si le nombre_triture est premier, ça ira plus vite... ???
// factorisation_du(154650136521)

$nombre = 1;
$factorisation_du_nombre = '';
$racine_carree_du_nombre = 0;
$nombre_triture = 0;
$diviseur = 2;
$fin_de_la_factorisation = 'non';
$fin_de_la_division_de_ce_diviseur = 'non';
$puissance = 0;


function factorisation_du_nombre(){

    global $nombre;
    
    global $factorisation_du_nombre;
    global $racine_carree_du_nombre;
    global $nombre_triture;
    global $diviseur;
    global $fin_de_la_factorisation;
    global $fin_de_la_division_de_ce_diviseur;
    global $puissance;

    $factorisation_du_nombre = '';
    $racine_carree_du_nombre = 0;
    $nombre_triture = 0;
    $diviseur = 2;
    $fin_de_la_factorisation = 'non';
    $fin_de_la_division_de_ce_diviseur = 'non';
    $puissance = 0;
    
    if($nombre == 0) $factorisation_du_nombre = '0^1';
    if($nombre == 1) $factorisation_du_nombre = '1^1';
    if($nombre == 2) $factorisation_du_nombre = '2^1';

    if($nombre > 2){
        $racine_carree_du_nombre = floor(sqrt($nombre));
        $nombre_triture = $nombre;
        $diviseur = 2;
        $fin_de_la_factorisation = 'non';

        while ($fin_de_la_factorisation == 'non'){

            $fin_de_la_division_de_ce_diviseur = 'non';
            $puissance = 0;

            while ($fin_de_la_division_de_ce_diviseur == 'non'){

                if($nombre_triture % $diviseur != 0){
                    $fin_de_la_division_de_ce_diviseur = 'oui';
                }

                if($nombre_triture % $diviseur == 0){
                    $nombre_triture = $nombre_triture / $diviseur;
                    $puissance = 1;

                    while ($fin_de_la_division_de_ce_diviseur == 'non'){

                        if($nombre_triture % $diviseur == 0){
                            $nombre_triture = $nombre_triture / $diviseur;
                            $puissance++;
                        }
                        if($nombre_triture % $diviseur != 0){
                            $factorisation_du_nombre .= '.' . $diviseur . '^' . $puissance;
                            $fin_de_la_division_de_ce_diviseur = 'oui';
                        }
                    }
                }
                $diviseur++;
            }

            if($diviseur > $nombre_triture){
                $fin_de_la_factorisation = 'oui';
            }

            if($diviseur > $racine_carree_du_nombre && $factorisation_du_nombre == ''){
                $fin_de_la_factorisation = 'oui';
            }
        }
        if ($factorisation_du_nombre != ''){
            // $factorisation_du_nombre = $factorisation_du_nombre.substring(1);
            $factorisation_du_nombre = substr($factorisation_du_nombre,1);
        }
        if ($factorisation_du_nombre == ''){$factorisation_du_nombre = $nombre . '^1';}
    }
}

?>