<?php
    require_once '../db/connexion.php';

if (
    isset($_GET['id'])
) {
    $id = $_GET['id'];

    $resultdel = mysqli_query($connexion,
    "DELETE FROM medic WHERE id_medic = '$id'");
    if ($resultdel) {
        header("location: voirMedic.php");
        
    }
}
