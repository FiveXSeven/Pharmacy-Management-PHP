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


            require_once '../db/connexion.php';
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $show = "SELECT * FROM medic WHERE id_medic = $id";
                    $resultShow = mysqli_query($connexion, $show);
                    $row = mysqli_fetch_assoc($resultShow);
                }

                if (isset($_POST['vendre'])) {
                    $id = $_GET['idUpdateStock'];
                    $nomMedic = $_POST['nomMedic'];
                    $prix = $_POST['prix'];
                    $stock = $_POST['stock'];
                    $quantite = $_POST['quantite'];
                    $date = $_POST['date'];


                    // FAIRE LA VENTE DU MEDICAMENT

                    if ($stock >= $quantite) {
                        $total = $prix * $quantite;
                        $reqVente = "INSERT INTO vente (date_vente, produit_vente, quantite_vente)
                        VALUES ('$date', '$id', '$quantite')";
                        $resultatVente = mysqli_query($connexion, $reqVente);
                        if ($resultatVente) {
                            header('location: voirVente.php');
                        }
                    } else {
                        header('location: voirMedic.php');
                    }



                    
                    // METTRE A JOUR LE STOCK
                    $newStock = $stock - $quantite;
                    $update = "UPDATE medic SET
                    quantite_medic = '$newStock'
                    WHERE id_medic = $id
                ";

                $resultat = mysqli_query($connexion, $update);
                if ($resultat) {
                    header('location: voirVente.php');
                }
            }




    ?>


    <div class="Container">
        <h2>Vendre le médicament séléctionné</h2>
            <div class="ajoutMedicForm">
                <form action="vendreMedic.php?idUpdateStock=<?php echo $id;?>" method="post">
                    <div class="form-group">
                        <label for="nomMedic">Nom médicament</label>
                        <input type="text" class="form-control" name="nomMedic" value="<?php echo $row['nom_medic']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input readonly type="number" class="form-control" name="prix" value="<?php echo $row['prix_medic']?>">
                    </div>
                    <div class="form-group">
                        <label for="quantite">Stock actuel</label>
                        <input readonly type="number" class="form-control" name="stock" value="<?php echo $row['quantite_medic']?>">
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité à vendre</label>
                        <input type="number" class="form-control" name="quantite">
                    </div>
                    <div class="form-group">
                        <label for="date">Date de vente</label>
                        <input type="text" class="form-control" name="date" placeholder="AAAA-MM-JJ">
                    </div>
                    <input type="submit" name="vendre" class="btn btn-sm" value="Vendre">
                </form>
            </div>  
    </div>
</body>

</html>