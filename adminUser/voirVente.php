<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Médicaments</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../btstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="../btstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="../btstrap/bootstrap-utilities.css">
    <link rel="stylesheet" href="../btstrap/bootstrap.css">
</head>

<body>
    <?php
        require_once '../includes/sideBar.php';
    ?>
    <div class="Container">
        <h2>Liste des ventes</h2>



        <!-- |||||||||||||||||| AFFICHER LES DONNEES |||||||||||||  -->
        <!-- |||||||||||||||||| AFFICHER LES DONNEES |||||||||||||  -->

        <?php require_once '../db/showMedic.php'; 
        require_once '../db/connexion.php';
        $showVente = "SELECT * FROM vente INNER JOIN medic ON vente.produit_vente = medic.id_medic";
        $result = mysqli_query($connexion, $showVente);

    ?>
        <div class="tableContainer">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom médicaments</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité vendu</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Date Vendu</th>
                        <th scope="col">Retirer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                            while ($row = mysqli_fetch_assoc($result)) {   
                        ?>
                        <td> <?php echo $row['nom_medic'] ?> </td>
                        <td> <?php echo $row['prix_medic'] ?> </td>
                        <td> <?php echo $row['quantite_vente'] ?> </td>
                        <td> <?php echo $row['cat_medic'] ?> </td>
                        <td> <?php echo $row['date_vente'] ?> </td>
                        <td>
                            <a class="btn btn-sm btn-secondary" href="retirerVente.php?id=<?=$row['id_vente']?>">Retirer</a>
                        </td> -->

                    </tr>
                    <?php 
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>