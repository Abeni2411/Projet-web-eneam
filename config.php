<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=magasin", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Exception $e) {
    die("ERREUR:" . $e->getMessage());
}
?>