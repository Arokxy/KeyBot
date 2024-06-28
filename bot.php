<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>KeyBot le Bot</title>
    <link rel="stylesheet" href="stylenav.css">
</head>
<body>
<nav>
    <div class="onglets">
        <div class="comp">
            <a class="logo"
               href="index.php"><img
                        alt="Logo" src="kb.jpg" height="70" width="70"/></a>
            <a href="bot.php" class="key"><h1 class="texte">KeyBot</h1></a>
        </div>
        <div class="recherche">
            <a class="clavier" href="clavierpage.php">
                <h2>Claviers</h2>
            </a>
            <form class="barre">
                <label class="rech-field">
                    <input type="search" placeholder="Recherche">
                </label>
                <a class="rech-icon"><img alt="loupe" src="loupe.png" height="30" width="30"/></a>
            </form>
            <div class="panier">
                <a href="panier.php"><img alt="Panier" src="paier_noir-.png" height="30" width="30"/></a>
                <span><?= array_sum($_SESSION['lepanier']) ?></span>
            </div>
        </div>
    </div>
</nav>
<barre>

    <ul class="bott">
        <li><img src="thumb-up.jpg" height="100" width="100"></li>
        <li>
            <a href="#">Utilisation</a>
            <ul>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Bureautique</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Prix</a>
            <ul>
                <li><a href="#">50€</a></li>
                <li><a href="#">100€</a></li>
                <li><a href="#">150€</a></li>
                <li><a href="#">200€</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Couleur</a>
            <ul>
                <li><a href="#">Noir</a></li>
                <li><a href="#">Blanc</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Taille</a>
            <ul>
                <li><a href="#">100%</a></li>
                <li><a href="#">TKL</a></li>
                <li><a href="#">60%</a></li>
            </ul>
        </li>
    </ul>
</barre>

</body>
</html>