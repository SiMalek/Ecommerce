<?php

try {
    $dsn = "mysql:host=localhost;dbname=ecommerce";
    $user = 'root';
    $pw = '';
    $pdo = new PDO($dsn, $user, $pw);
} catch (Exception $e) {
    echo "Problème de connexion: " . $e->getMessage();
}
