<?php  

    try
    {
        $data_base = new PDO('mysql:host=localhost;dbname=' . 
        $nom_de_la_base_de_donnees . 
        ';charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>