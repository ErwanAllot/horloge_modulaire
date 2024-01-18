<?php

ini_set('max_execution_time', 1200);


// include 'maths/factorisation.php';
// include 'maths/nature.php';

// include 'maths/factorisation_cycle.php';
// pas comme en JS où j'arrive à réutiliser la même fonction... grr

$nom_de_la_base_de_donnees = 'horloge';



include 'sql/dataBase.php';
// include 'sql/horloge_modulatoire_destroy.php';
// include 'sql/horloge_modulatoire_create_table.php';

// include 'application.php';


include 'doc.html';


include 'interactivite.php';



?>