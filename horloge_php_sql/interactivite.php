<?php

$pi = pi();

$alpha = 0;
$beta = 0;

$cumul = 0;

$cumul_id = 0;

$count = 0;

$parite = 0;

$entree_d_un_script_javascript = '<script type="text/javascript">window.onload = function (){'; 
$sortie_d_un_script_javascript = '};</script>'; 

echo $entree_d_un_script_javascript ;

$request = $data_base->query("SELECT * FROM horloge_modulatoire
-- WHERE (cycle < 9) 
WHERE (nature_du_nombre = 'premier') 
-- WHERE (nature_du_nombre = 'premier') AND (nombre < 101) 
-- AND (id < 203) 
-- ORDER BY nombre ASC
-- WHERE (hypotenuse_carre < 79203) 
-- ORDER BY hypotenuse_carre ASC
ORDER BY id ASC
-- ORDER BY nombre ASC
");



while ($data = $request->fetch()) {
    $id = $data['id'];
    $nombre = (int) $data['nombre'];
    $angle = (float) $data['angle'];
    $nature_du_nombre = (string) $data['nature_du_nombre'];

    $cycle = (int) $data['cycle'];
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

    $cumul_id = $cumul_id + $id;

        // echo 'impression_d_un_atome(' . $cumul . ',' . $angle . ');';

        // echo 'impression_d_un_atome(' . sqrt($cumul) . ',' . $alpha . ');';

        // echo 'impression_d_un_atome(' . $cumul . ',' . $alpha . ');';

        // echo 'impression_d_un_atome(' . sqrt($cumul)  . ',' . $beta . ');';

        // if($cycle == 11){
        //     // echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ',' . $nombre . ');';
        //     echo 'impression_d_un_atome(' . sqrt($cumul)   . ',' . $beta . ',' . $nombre . ');';
        // }

        echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ',' . $nombre . ');';


        // if($cycle == 11){
        //     $count++;

        //     $parite++;
        //     // if($count < 100){
        //     // echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ',' . $nombre . ');';
        //     // // echo 'impression_d_un_atome(' . sqrt($cumul_id)   . ',' . $beta . ',' . $nombre . ');';
        //     // }

        //     if($parite%2==0){
        //         if($count > 225 && $count < 250){
        //             echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ',' . $nombre . ');';
        //         }
        //     }

        //     // if($count > 150 && $count < 200){
        //     //     echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $beta . ',' . $nombre . ');';
        //     //     // echo 'impression_d_un_atome(' . sqrt($cumul_id)   . ',' . $beta . ',' . $nombre . ');';
        //     //     }


        // }


        // echo 'impression_d_un_atome(' . $cumul_id/100  . ',' . $alpha . ');';

        // echo 'impression_d_un_atome(' . $cumul/100 . ',' . $beta . ');';

        // echo 'impression_d_un_atome(' . $cumul/100 . ',' . $beta . ');';


    // $alpha = $alpha % (2*$pi);
    // echo 'impression_d_un_atome(' . $nombre . ',' . $alpha . ');';
    // echo 'impression_d_un_atome(' . $id . ',' . $alpha . ');';
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