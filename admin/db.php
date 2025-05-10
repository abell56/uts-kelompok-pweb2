<?php
$dsn = 'mysql:host=localhost;dbname=db_faskes;charset=utf8mb4';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}
?>


