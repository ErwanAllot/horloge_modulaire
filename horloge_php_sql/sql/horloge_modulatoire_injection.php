<?php 

    $request = $data_base->prepare('INSERT INTO 
    horloge_modulatoire(cycle, nombre, angle, factorisation_du_nombre, nature_du_nombre) 
    VALUES(:cycle, :nombre, :angle, :factorisation_du_nombre, :nature_du_nombre)');
    $request->execute(array(
        'cycle' => $cycle,
        'nombre' => $nombre,
        'angle' => $angle,
        'factorisation_du_nombre' => $factorisation_du_nombre,
        'nature_du_nombre' => $nature_du_nombre,
    ));
    $request->closeCursor();

?>