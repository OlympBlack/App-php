<?php
try {
    $bdd = new PDO('mysql:host=localhost; dbname=ifri-php; charset=utf8', 'root', '');
} catch (Exception $e) {
    die("Une erreur s'est produite" . $e->getMessage());
}
