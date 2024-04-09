<?php
require_once 'connexion.php';

$showQuery = "SELECT * FROM categori INNER JOIN medic ON categori.nom_cat = medic.cat_medic WHERE quantite_medic > 0";
$result = mysqli_query($connexion, $showQuery);