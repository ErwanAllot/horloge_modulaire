<?php

$pi = pi();

$alpha = 0;
$beta = 0;

$cumul = 0;

$cumul_id = 0;


$entree_d_un_script_javascript = '<script type="text/javascript">window.onload = function (){'; 
$sortie_d_un_script_javascript = '};</script>'; 

echo $entree_d_un_script_javascript ;


//=== PARTIE 1

$request = $data_base->query("SELECT * FROM horloge_modulatoire

WHERE (nature_du_nombre = 'premier') AND (nombre < 101) 

ORDER BY id ASC

");



while ($data = $request->fetch()) {
    // $id = $data['id'];
    $nombre = (int) $data['nombre'];
    $angle = (float) $data['angle'];
    $cycle = (int) $data['cycle'];
    $id = $data['id'];
    // $nature_du_nombre = (string) $data['nature_du_nombre'];

    // $alpha = abs($alpha-$angle);
    $alpha = abs($alpha-$angle);
    $beta = $beta + $angle;

    $cumul = $cumul + $nombre;

    $cumul_id = $cumul_id + $id;

    // echo 'impression_d_un_atome(' . sqrt($cumul)  . ',' . $beta . ');';
        // echo 'impression_d_un_atome(' . $cumul/100  . ',' . $beta . ');';

        // echo 'impression_d_un_atome(' . $cumul  . ',' . $alpha . ');';

        if($cycle == 11){
            echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ');';
        }

}

$request->closeCursor();




//=== PARTIE 2

$request = $data_base->query("SELECT * FROM alea
ORDER BY id_de_la_spirale ASC
");

while ($data = $request->fetch()) {

    $nombre = (int) $data['nombre'];
    $angle = (float) $data['angle'];
    $cycle = (int) $data['cycle'];
    $id = $data['id_de_la_spirale'];

    $alpha = abs($alpha-$angle);

    $beta = $beta + $angle;

    $cumul = $cumul + $nombre;

    $cumul_id = $cumul_id + $id;

    // echo 'impression_d_un_atome(' . sqrt($cumul)  . ',' . $beta . ');';
            // echo 'impression_d_un_atome(' . $cumul/100  . ',' . $beta . ');';

            // echo 'impression_d_un_atome(' . $cumul  . ',' . $alpha . ');';

            if($cycle == 11){
                echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ');';
            }


}

$request->closeCursor();

// FIN

echo $sortie_d_un_script_javascript;


?>