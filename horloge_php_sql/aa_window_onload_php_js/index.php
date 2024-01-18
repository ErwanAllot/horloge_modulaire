<?php 
include 'serveur/fonctions.php'; 
?>

<html lang="fr"><head>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="banniere/la_banniere.css">
<link rel="stylesheet" href="corps_de_l_index/total.css">
<link rel="stylesheet" href="corps_de_l_index/panneau_interactif.css">
<?php 
include 'meta/donnees_index.php';
include 'serveur/boutons_styles.php'; 
include 'serveur/boutons_interactivite.php';
?>

</head><body>

<?php 
include 'banniere/la_banniere.php';
include 'corps_de_l_index/theme.php';
include 'corps_de_l_index/panneau_interactif.php';
include 'corps_de_l_index/profil_utilisateur.php';
include 'corps_de_l_index/liens_exterieurs.php';
?>

</body></html>