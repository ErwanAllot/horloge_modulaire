<?php

$pi = pi();

$alpha = 0;
$beta = 0;

$cumul = 0;



$entree_d_un_script_javascript = '<script type="text/javascript">window.onload = function (){'; 
$sortie_d_un_script_javascript = '};</script>'; 

echo $entree_d_un_script_javascript ;

$request = $data_base->query("SELECT * FROM alea
-- WHERE (cycle < 4) 
-- WHERE (nature_du_nombre = 'premier') 
-- AND (id < 203) 
-- ORDER BY nombre ASC
-- WHERE (hypotenuse_carre < 79203) 
-- ORDER BY hypotenuse_carre ASC
ORDER BY id_de_la_spirale ASC
-- ORDER BY nombre ASC
");



while ($data = $request->fetch()) {
    // $id = $data['id'];
    $nombre = (int) $data['nombre'];
    $angle = (float) $data['angle'];
    // $nature_du_nombre = (string) $data['nature_du_nombre'];
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

    $beta = $beta + $angle;

    $cumul = $cumul + $nombre;


        // echo 'impression_d_un_atome(' . $cumul . ',' . $angle . ');';

        // echo 'impression_d_un_atome(' . sqrt($cumul) . ',' . $alpha . ');';

        // echo 'impression_d_un_atome(' . $cumul . ',' . $alpha . ');';

        echo 'impression_d_un_atome(' . sqrt($cumul)  . ',' . $beta . ');';

        // echo 'impression_d_un_atome(' . $cumul/100  . ',' . $beta . ');';

        // echo 'impression_d_un_atome(' . $cumul/100 . ',' . $beta . ');';

        // echo 'impression_d_un_atome(' . $cumul/100 . ',' . $beta . ');';


    // $alpha = $alpha % (2*$pi);
    // echo 'impression_d_un_atome(' . $nombre . ',' . $alpha . ');';
    // echo 'impression_d_un_atome(' . $id . ',' . $alpha . ');';2
    // echo 'impression_d_un_atome(' . $id . ',' . $angle . ');';

    // echo 'impression_d_un_atome(' . $id . ',' . $beta . ');';
    // echo 'impression_d_un_atome(' . $nombre . ',' . $beta . ');';
    //     if($nature_du_nombre == 'premier' ){
    //         // echo 'impression_d_un_atome(' . $id . ',' . $beta . ');';
    //         echo 'impression_d_un_atome(' . $nombre . ',' . $beta . ');';
    // }


    // if($nature_du_nombre == 'premier' ){
    //         echo 'impression_d_un_atome(' . $id . ',' . $alpha . ');';
    // }


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