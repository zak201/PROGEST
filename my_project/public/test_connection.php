<?php
try {
    $pdo = new PDO("mysql:host=symfony_db;dbname=symfony", "symfony", "symfony");
    echo "Connexion réussie\n";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}
