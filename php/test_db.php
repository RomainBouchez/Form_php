<?php
// Afficher les erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Paramètres de connexion
$host = 'localhost';
$dbname = 'romainbo_form';
$username = 'romainbo_uchez';
$password = 'u9gzYscDje7AHhuw.HaQ';

// Test de connexion
echo "<h1>Test de connexion à la base de données</h1>";

// Test mysqli
echo "<h2>Test avec mysqli:</h2>";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    echo "Échec de la connexion mysqli: " . $mysqli->connect_error;
} else {
    echo "Connexion mysqli réussie!";
    $mysqli->close();
}

echo "<hr>";

// Test PDO
echo "<h2>Test avec PDO:</h2>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion PDO réussie!";
} catch (PDOException $e) {
    echo "Échec de la connexion PDO: " . $e->getMessage();
}
?>