<?php

$host = 'localhost';
$dbname = 'auth';
$user = 'root';
$pass = '';

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
 
} catch (PDOException $e) {
    echo $e->getMessage();
}
