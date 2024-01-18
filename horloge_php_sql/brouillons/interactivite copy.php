<?php

// $mes_boutons = array("html", "css", "js");
$entree_d_un_script_javascript = '<script type="text/javascript">window.onload = function (){'; 
$sortie_d_un_script_javascript = '};</script>'; 
// $verification_maConsole = 'maConsole.innerHTML = "toto";';

echo $entree_d_un_script_javascript ;

// for($i = 0; $i < count($mes_boutons); $i = $i + 1 ){
//     $mon_bouton = 'bouton_' . $mes_boutons[$i];
//     $information_du_bouton = $mes_boutons[$i] . '_complement_information';
// echo
//     $mon_bouton . '.addEventListener("mouseenter", function(event){' . 
//         $information_du_bouton .'.style.display = "block";});' .
//     $mon_bouton . '.addEventListener("mouseleave", function(event){' . 
//         $information_du_bouton .'.style.display = "none";});' .
//     $mon_bouton . '.addEventListener("focus", function(event){' . 
//         $information_du_bouton .'.style.display = "block";});' .
//     $mon_bouton . '.addEventListener("focusout", function(event){' . 
//         $information_du_bouton .'.style.display = "none";});';
// }

// echo 'impression_d_un_atome(1,0);';

$pi = pi();

$nombre = 1;
$angle = $pi;
echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';

$nombre = 2;
$angle = $pi/2;
echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';

$nombre = 3;
$angle = 3*$pi/2;
echo 'impression_d_un_atome(' . $nombre . ',' . $angle . ');';



echo $sortie_d_un_script_javascript;


?>