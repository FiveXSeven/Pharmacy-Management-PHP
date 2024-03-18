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
        <h2>Ajouter des médicaments</h2>
            <div class="ajoutMedicForm">
                <form action="../db/addMedic.php" method="post">
                    <div class="form-group">
                        <label for="nomMedic">Nom médicament</label>
                        <input type="text" class="form-control" name="nomMedic" placeholder="Nom médicament">
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="number" class="form-control" name="prix" placeholder="Prix">
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité</label>
                        <input type="number" class="form-control" name="quantite" placeholder="Quantité">
                    </div>
                    <div class="form-group">
                        <label for="prix">Catégorie</label>
                        <select name="categirie">
                            <option value="CATEGORIE">CATEGORIE</option>
                            <option value="Liquide">Liquide</option>
                            <option value="Comprimé">Comprimé</option>
                        </select>
                    </div>
                    <input type="submit" name="ajoutMedic" class="btn btn-sm" value="Ajouter">
                </form>
            </div>  
    </div>
</body>

</html>