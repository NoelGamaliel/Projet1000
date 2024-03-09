<?php

$dsn = 'mysql:host=localhost;dbname=ndtechnologie;charset=utf8';
$user = 'root';
$pass = '';

try {
    $conn = new PDO($dsn, $user, $pass); //code...
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo  'Une error de la connexion est survenue'; //throw $th;
}


