<?php  
    
    ini_set('max_execution_time', 1200);


    $nom_de_la_base_de_donnees = 'croix_celtique_hypotenuse_entier';
    $limite = 200;
    $reset = 0;
    include 'dataBase.php';



    if ($reset == 1){
        // step 1
        include 'matrice_sql_destroy.php';
        include 'matrice_sql_create_table.php';
        include 'matrice_sql_injection.php';

        // step 2
        // include 'phase_sql_destroy.php';
        // include 'phase_sql_create_table.php';
        // include 'matrice_sql_recuperation_step_hypotenuse_carre.php';

    }


    include 'matrice_sql_recuperation_step_hypotenuse_carre.php';



  include 'body.php';
?>

