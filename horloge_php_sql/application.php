<?php

include 'func_application.php';

$pi = pi();

//=============================================================================
$cycle = 1;
$nombre = 1;
$angle = $pi;

factorisation_du_nombre();
nature_du_nombre();
include 'sql/horloge_modulatoire_injection.php';

//=============================================================================
$cycle = 2;

$nombre = 2;
$angle = $pi/2;

factorisation_du_nombre();
nature_du_nombre();
include 'sql/horloge_modulatoire_injection.php';


$nombre = 3;
$angle = 3*$pi/2;

factorisation_du_nombre();
nature_du_nombre();
include 'sql/horloge_modulatoire_injection.php';


//=============================================================================
// $cycle = 3;

reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=2;
    if ($ticTac % 3 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 4
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=6;
    if ($ticTac % 2 == 0) $nombre = $nombre - 10;
    if ($ticTac % 6 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 5
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=12;
    if ($ticTac % 5 == 0) $nombre = $nombre - 5 * 12 + 6;
    if ($ticTac % 10 == 0) $nombre = $nombre - 10;
    if ($ticTac % 30 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 6
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=12;
    if ($ticTac % 5 == 0) $nombre = $nombre - 5 * 12 + 6;
    if ($ticTac % 10 == 0) $nombre = $nombre - 10;
    if ($ticTac % 30 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 7
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=60;
    if ($ticTac % 7 == 0) $nombre = $nombre - 7 * 60 + 12; // 420 - 12
    if ($ticTac % 35 == 0) $nombre = $nombre - 54; // 60 - 6
    if ($ticTac % 70 == 0) $nombre = $nombre - 10; // 12 - 2
    if ($ticTac % 210 == 0) $nombre = $nombre - 5; // 6 -1
}


//=============================================================================
// cycle = 8 // pas bon, ah si semble-t-il
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=420;
    if ($ticTac % 2 == 0) $nombre = $nombre - 840 + 60 ;
    if ($ticTac % 14 == 0) $nombre = $nombre - 7 * 60 + 12 ;
    if ($ticTac % 70 == 0) $nombre = $nombre - 54 ;
    if ($ticTac % 140 == 0) $nombre = $nombre - 10 ;
    if ($ticTac % 420 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 9
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=840;
    if ($ticTac % 3 == 0) $nombre = $nombre - 2520 + 420;
    if ($ticTac % 6 == 0) $nombre = $nombre - 840 + 60 ;
    if ($ticTac % 42 == 0) $nombre = $nombre - 7 * 60 + 12 ;
    if ($ticTac % 210 == 0) $nombre = $nombre - 54 ;
    if ($ticTac % 420 == 0) $nombre = $nombre - 10 ;
    if ($ticTac % 1260 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 10
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=840;
    if ($ticTac % 3 == 0) $nombre = $nombre - 2520 + 420;
    if ($ticTac % 6 == 0) $nombre = $nombre - 840 + 60 ;
    if ($ticTac % 42 == 0) $nombre = $nombre - 7 * 60 + 12 ;
    if ($ticTac % 210 == 0) $nombre = $nombre - 54 ;
    if ($ticTac % 420 == 0) $nombre = $nombre - 10 ;
    if ($ticTac % 1260 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 11
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=2520;
    if ($ticTac % 11 == 0) $nombre = $nombre - 27720 + 840;
    if ($ticTac % 33 == 0) $nombre = $nombre - 2520 + 420;
    if ($ticTac % 66 == 0) $nombre = $nombre - 840 + 60 ;
    if ($ticTac % 462 == 0) $nombre = $nombre - 7 * 60 + 12 ;
    if ($ticTac % 2310 == 0) $nombre = $nombre - 54 ;
    if ($ticTac % 4620 == 0) $nombre = $nombre - 10 ;
    if ($ticTac % 13860 == 0) $nombre = $nombre - 5;
}


//=============================================================================
// cycle = 12
reinitialisation_des_variables_pour_le_nouveau_cycle();

while($angle < 2*$pi){

    factorisation_du_nombre();
    nature_du_nombre();
    include 'sql/horloge_modulatoire_injection.php';
    incrementation_de_angle_et_tictac();

    $nombre +=2520;
    if ($ticTac % 11 == 0) $nombre = $nombre - 27720 + 840;
    if ($ticTac % 33 == 0) $nombre = $nombre - 2520 + 420;
    if ($ticTac % 66 == 0) $nombre = $nombre - 840 + 60 ;
    if ($ticTac % 462 == 0) $nombre = $nombre - 7 * 60 + 12 ;
    if ($ticTac % 2310 == 0) $nombre = $nombre - 54 ;
    if ($ticTac % 4620 == 0) $nombre = $nombre - 10 ;
    if ($ticTac % 13860 == 0) $nombre = $nombre - 5;
}




echo '<br><br>==========================';


?>