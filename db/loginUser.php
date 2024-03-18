<?php
session_start();

// se connecter dans l'app

require_once 'connexion.php';

$username = '';
$userpwd = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        if (
            !empty(($_POST['username'])) &&
            !empty(($_POST['pwd']))
            ) {
            $username = $_POST['username'];
            $userpwd = $_POST['pwd'];

            $reqLogin = "SELECT id_user FROM user_pharma WHERE username = '$username' AND pwd_user = '$userpwd'";
            $resultLogin = mysqli_query($connexion, $reqLogin);
            if ($resultLogin) {
                echo "Loginnnnnnnnnnn";
                if (mysqli_num_rows($resultLogin) == 1) {
                    $_SESSION['user'] = $username;
                    $_SESSION['pwd'] = $userpwd;
                    header('location: ../adminUser/ajouterMedic.php');
                } else {
                    echo $error[] = "nom d'utilisateur ou mot de passe inorrect";
                }
            }
        }

        
    }



} else {
    header('locaion: ../adminUser/login.php');
}