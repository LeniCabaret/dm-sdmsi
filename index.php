<?php
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

$sql = "SELECT prenom FROM inscrits ORDER BY id ASC LIMIT 1";
$stmt = $pdo->query($sql);
$premierPrenom = $stmt->fetchColumn();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maquette DS SMDSI 04/12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#section1">Accueil</a></li>
                <li><a href="#section2">Contactez-moi</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="section1">
            <img src="https://picsum.photos/100/50">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, vel.</p>
            <p>Ullam corrupti possimus adipisci voluptatem facilis, dicta maxime, itaque veniam ut similique, quia aspernatur?</p>
        </section>

        <section id="section2">
            <form action="send.php" method="post">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                <button type="submit" class="button1">Validez</button>
            </form>
        </section>
    </main>

    <footer>
        Page web faite par <?php echo htmlspecialchars($premierPrenom ?? ''); ?> venant de la base de données Php
    </footer>
</body>
</html>