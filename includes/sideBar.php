<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../btstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="../btstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="../btstrap/bootstrap-utilities.css">
    <link rel="stylesheet" href="../btstrap/bootstrap.css">
</head>

<body>
    <div class="wrapper">
        <div class="sideBar">
            <h2>PHARMA HEALTH</h2>
            <img src="../img/user2.svg" alt="">
            <ul>
                <li><a class="user" href="#"><?php echo $_SESSION['user']  ?></a></li>
                <li><a href="../adminUser/voirVente.php">Voir Les Ventes</a></li>
                <li><a href="../adminUser/voirMedic.php">Voir Les Médicaments</a></li>
                <li><a href="../adminUser/ajouterMedic.php">Ajouter Médicaments</a></li>
                <li><a href="../adminUser/vendre.php">Vendre</a></li>
                <li><a href="../db/logoutUser.php">Se Déconnecter</a></li>
            </ul>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>