<?php 

    $request = $data_base->prepare('INSERT INTO 
    alea(id_de_la_spirale, cycle, nombre, angle, factorisation_du_nombre, nature_du_nombre) 
    VALUES(:id_de_la_spirale, :cycle, :nombre, :angle, :factorisation_du_nombre, :nature_du_nombre)');
    $request->execute(array(
        'id_de_la_spirale' => $id_de_la_spirale,
        'cycle' => $cycle,
        'nombre' => $nombre,
        'angle' => $angle,
        'factorisation_du_nombre' => $factorisation_du_nombre,
        'nature_du_nombre' => $nature_du_nombre,
    ));
    $request->closeCursor();

?>