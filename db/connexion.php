<?php 

// connexion a la base de donnee

$servername = 'localhost';
$serveruser = 'root';
$serverpwd = '';
$dbname = 'pharma';

$connexion = mysqli_connect($servername, $serveruser, $serverpwd, $dbname) or die('Erreur de connexion');


// mysqli_close($connexion);