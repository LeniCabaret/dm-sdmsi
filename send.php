<?php
session_start();

$host = 'localhost';
$db   = 'inscriptions_dm';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Erreur de connexion à la base : " . $e->getMessage());
}

$prenom = $_POST['prenom'] ?? '';
$email  = $_POST['email'] ?? '';

if (!empty($prenom) && !empty($email)) {
    $sql = "INSERT INTO inscrits (prenom, mail) VALUES (:prenom, :mail)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['prenom' => $prenom, 'mail' => $email]);
    $_SESSION['success'] = true;
}

header("Location: index.php");
exit();