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
        // require_once '../db/showMedic.php';


        // RECUPERATION DE LA RECHERCHE
        if (isset($_POST['searchMedic'])) {
            $search = $_POST['searchMedic'];
            
        }
    ?>
    <div class="Container">
        <h2>Voir les médicaments</h2>
        <form action="search.php" method="post" class="searchBox">
            <input type="text" class="form-control" name="search" placeholder="Recherche par catégorie">
            <input type="submit" name="searchMedic" class="btn btn-sm" value="Rechercher">
        </form>


        <!-- |||||||||||||||||| AFFICHER LES DONNEES |||||||||||||  -->
        <!-- |||||||||||||||||| AFFICHER LES DONNEES |||||||||||||  -->
        <!-- |||||||||||||||||| AFFICHER LES DONNEES |||||||||||||  -->

    <?php
        require_once '../db/showMedic.php';
        
        // GESTION DE LA BARRE DE RECHERCHE
        if (isset($_POST['searchMedic'])) {
            $search = $_POST['search'];
            // echo $search;

            $reqSearch = "SELECT * FROM categori INNER JOIN medic ON categori.nom_cat = medic.cat_medic WHERE nom_medic LIKE'%$search%' OR cat_medic LIKE '%$search%'";

            $resultSearch = mysqli_query($connexion, $reqSearch);
        }

    ?>

        <div class="tableContainer">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom médicaments</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Modifier Stock</th>
                        <th scope="col">Vendre</th>
                        <th scope="col">Retirer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                            while ($row = mysqli_fetch_assoc($resultSearch)) {   
                            
                            
                        ?>
                        <td> <?php echo $row['nom_medic'] ?> </td>
                        <td> <?php echo $row['prix_medic'] ?> </td>
                        <td> <?php echo $row['quantite_medic'] ?> </td>
                        <td> <?php echo $row['cat_medic'] ?> </td>

                        <td>
                            <a class="btn btn-sm btn-secondary" href="ajouterStock.php?id=<?=$row['id_medic']?>">Modifier</a>
                        </td>

                        <td>
                        <a class="btn btn-sm btn-secondary" href="vendre.php?id=<?=$row['id_medic']?>">Vendre</a>
                        </td>

                        <td>
                            <a class="btn btn-sm btn-secondary" href="retirer.php?id=<?=$row['id_medic']?>">Retirer</a>
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