<?php

$request = $data_base->query("SELECT * FROM matrice 
-- WHERE (hypotenuse_carre < 79203) 
ORDER BY hypotenuse_carre ASC
");



while ($data = $request->fetch()) {
    $id = $data['id'];
    $dimension_un = (int) $data['dimension_un'];
    $dimension_deux = (int) $data['dimension_deux'];
    $hypotenuse_carre = (int) $data['hypotenuse_carre'];
    $hypotenuse = $data['hypotenuse'];
    $solution_naturelle = $data['solution_naturelle'];

    $hypotenuse_round = floor(sqrt($hypotenuse_carre));


    // $hypotenuse_true = sqrt($hypotenuse_carre);
    // $hypotenuse_true = $hypotenuse_true / 1;
    // echo 'ok';
    // if(is_int($hypotenuse_true)){
    if($hypotenuse / $hypotenuse_round == 1){
        echo ' V ' . $hypotenuse . ' = ' .  $dimension_un . '² + ' . $dimension_deux . '² <br>';
    };


    // echo (is_int($hypotenuse));
       
   // echo ' V ' . $hypotenuse . ' = ' .  $dimension_un . '² . ' . $dimension_deux**2 . '² <br>';
    


    // $racine_carre_de_l_hypotenuse = sqrt($hypotenuse_carre);

    // if($hypotenuse % 1 == 0){
    //     echo $hypotenuse % 1 . ' <br>';
    //     echo 1.58 % 1 . ' <br>';
    //     echo 3.58 % 2 . ' <br>';
    //     echo ' V ' . $hypotenuse . ' = ' .  $dimension_un . '² . ' . $dimension_deux**2 . '² <br>';
    // }

}

$request->closeCursor();

?>