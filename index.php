<?php

?>

<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maquette DS SMDSI 04/12</title>
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <header>
        <nav>
            <ul>
                <li><a href="#section1">Accueil</a></li>
                <li><a href="#section2">Contactez-moi</a></li>
            </ul>
        </nav>
    </header>
</body>

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
    <p>Page web</p>
</footer>

</html>