<?php

require_once 'connexion.php';

    if (isset($_POST['ajoutMedic'])) {
        if (!empty($_POST['nomMedic']) &&
        !empty($_POST['prix']) &&
        !empty($_POST['quantite']) &&
        !empty($_POST['categirie'])
        ) {
            $nomMedic = $_POST['nomMedic'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            $categirie = $_POST['categirie'];
        }


        // mettre les donnees dans la BASE DE DONNEES 

        $insertMedic = "INSERT INTO medic(
            nom_medic,
            prix_medic,
            quantite_medic,
            cat_medic
        )
        VALUES(
            '$nomMedic',
            '$prix',
            '$quantite',
            '$categirie'
        )";

        $result = mysqli_query($connexion, $insertMedic);

        if ($result) {
        header('location: ../adminUser/voirMedic.php');
        }

    } else {
        header('location: ../adminUser/ajouterMedic.php');
    }