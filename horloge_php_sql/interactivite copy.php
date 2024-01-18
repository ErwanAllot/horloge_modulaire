<?php

$pi = pi();

$alpha = 0;

$entree_d_un_script_javascript = '<script type="text/javascript">window.onload = function (){'; 
$sortie_d_un_script_javascript = '};</script>'; 

echo $entree_d_un_script_javascript ;

$request = $data_base->query("SELECT * FROM horloge_modulatoire
WHERE (nature_du_nombre = 'premier') AND (id < 203) 
-- ORDER BY nombre ASC
-- WHERE (hypotenuse_carre < 79203) 
-- ORDER BY hypotenuse_carre ASC
ORDER BY id ASC
");



while ($data = $request->fetch()) {
    $id = $data['id'];
    $nombre = (int) $data['nombre'];
    $angle = (float) $data['angle'];
    $nature_du_nombre = (string) $data['nature_du_nombre'];
    // $hypotenuse_carre = (int) $data['hypotenuse_carre'];
    // $hypotenuse = $data['hypotenuse'];
    // $solution_naturelle = $data['solution_naturelle'];

    // $hypotenuse_round = floor(sqrt($hypotenuse_carre));

    // if($nature_du_nombre == 'premier' ){
    //     $alpha = abs($alpha-$angle);
    //     $alpha = $alpha % (2*$pi);
    //     echo 'impression_d_un_atome(' . $nombre . ',' . $alpha . ');';
    // }

    $alpha = abs($alpha-$angle);
    $alpha = $alpha % (2*$pi);
    echo 'impression_d_un_atome(' . $nombre . ',' . $alpha . ');';


    // if($nature_du_nombre == 'premier' ){
    //     echo 'impression_d_un_atome(' . $nombre . ',' . $alpha . ');';
    // }

    // if($nature_du_nombre == 'premier' ){
    //     echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';
    // }

}

$request->closeCursor();

// $nombre = 1;
// $angle = $pi;
// echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';

// $nombre = 2;
// $angle = $pi/2;
// echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';

// $nombre = 3;
// $angle = 3*$pi/2;
// echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';



echo $sortie_d_un_script_javascript;


?>