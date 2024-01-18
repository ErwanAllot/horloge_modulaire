<?php

echo 'ok';
echo '<br>';

//===
// la liste aléatoire

$time = 0;

$serie_al = 101;

// echo $serie_al;
// echo '<br>';


// while($serie_al < 61881){
    while($serie_al < 61000){

    $serie_al = $serie_al + floor(log($serie_al));

    // echo $serie_al;
    // echo '<br>';

    include 'sql_alea/horloge_modulatoire_recup.php';

    include 'sql_alea/alea_injection.php';


}








// $request = $data_base->query("SELECT * FROM horloge_modulatoire
// WHERE (nature_du_nombre = 'premier') 
// -- AND (id < 203) 
// -- ORDER BY nombre ASC
// -- WHERE (hypotenuse_carre < 79203) 
// -- ORDER BY hypotenuse_carre ASC
// ORDER BY id ASC
// -- ORDER BY nombre ASC
// ");



// while ($data = $request->fetch()) {
//     $id = $data['id'];
//     $nombre = (int) $data['nombre'];
//     $angle = (float) $data['angle'];
//     $nature_du_nombre = (string) $data['nature_du_nombre'];
// }

// $request->closeCursor();

?>