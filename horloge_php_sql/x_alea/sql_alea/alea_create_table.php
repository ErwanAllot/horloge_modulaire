<?php
$request = $data_base->query("CREATE TABLE alea (
    id int NOT NULL AUTO_INCREMENT,
    id_de_la_spirale int,
    cycle int,
    nombre int,
    angle float,
    factorisation_du_nombre varchar(100), 
    nature_du_nombre varchar(20), 
    PRIMARY KEY (id))"
);
$request->closeCursor();

// -- enieme_position_dans_le_cycle int,
?>