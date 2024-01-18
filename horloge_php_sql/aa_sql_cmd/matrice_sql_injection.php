<?php 

// $limite = 50;
$dimension_un = 1;
$dimension_deux = 1;
$hypotenuse_carre = 0;
$hypotenuse = 0;
$solution_naturelle = 'non';


while($dimension_deux < $limite){

    for($dimension_un = 1; $dimension_un < $limite; $dimension_un++){
        for($dimension_deux = $dimension_un; $dimension_deux < $limite; $dimension_deux++){

            $solution_naturelle = 'non';

            $hypotenuse_carre = $dimension_un * $dimension_un + $dimension_deux * $dimension_deux;
            $hypotenuse = sqrt($hypotenuse_carre);

            if(is_int($hypotenuse)){
                $solution_naturelle = 'oui';
            };

            $request = $data_base->prepare('INSERT INTO 
            matrice(dimension_un, dimension_deux, hypotenuse_carre, hypotenuse, solution_naturelle) 
            VALUES(:dimension_un, :dimension_deux, :hypotenuse_carre, :hypotenuse, :solution_naturelle)');
            $request->execute(array(
                'dimension_un' => $dimension_un,
                'dimension_deux' => $dimension_deux,
                'hypotenuse_carre' => $hypotenuse_carre,
                'hypotenuse' => $hypotenuse,
                'solution_naturelle' => $solution_naturelle,
            ));
            $request->closeCursor();
        }
    }
}

?>