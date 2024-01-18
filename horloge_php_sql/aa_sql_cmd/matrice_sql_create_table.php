<?php
$request = $data_base->query("CREATE TABLE matrice (
    id int NOT NULL AUTO_INCREMENT,
    dimension_un int,
    dimension_deux int,
    hypotenuse_carre int,
    hypotenuse float,
    solution_naturelle varchar(20), 
    PRIMARY KEY (id))"
);
$request->closeCursor();
?>