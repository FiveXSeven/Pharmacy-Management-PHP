<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://_id'])) {googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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
    <div class="container">
        <div class="formContainer">
            <div class="right">
                <h2>CONNEXION</h2>
                <img src="../img/user1.svg" alt="">
            </div>
            <div class="left">
                <form action="../db/loginUser.php" method="post">
                    <div class="form-group">
                        <h2>PHARMA HEALTH</h2>
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" name="pwd" placeholder="Mot de passe">
                    </div>
                    <input type="submit" name="login" class="btn btn-sm" value="Se connecter">
                </form>
            </div>
        </div>
    </div>
</body>

</html>