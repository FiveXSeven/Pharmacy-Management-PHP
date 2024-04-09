<?php
require_once '../db/connexion.php';

if (
    isset($_GET['id'])
) {
    $id = $_GET['id'];

    $resultdel = mysqli_query($connexion,
    "DELETE FROM vente WHERE id_vente = $id");
    if ($resultdel) {
        header("location: voirVente.php");
        
    }

}
