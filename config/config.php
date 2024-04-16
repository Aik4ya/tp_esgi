<?php

// Configuration du fichier de test

// Définition des constantes de configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'my_database');

// Autres configurations
$debugMode = true;
$cacheEnabled = false;

// Configuration de la connexion à la base de données
$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// Connexion à la base de données
try {
    $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options);
    echo 'Connexion à la base de données réussie!';
} catch (PDOException $e) {
    echo 'Erreur de connexion à la base de données: ' . $e->getMessage();
}

// Autres configurations et fonctionnalités de test...

?>