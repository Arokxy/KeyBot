<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/html" lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>KeyBot</title>
    <link rel="stylesheet" href="site.css">
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
                <a class="rech-icon"><img src="loupe.png" height="30" width="30"/></a>
            </form>
            <div class="panier">
                <a href="panier.php"><img alt="Panier" src="paier_noir-.png" height="30" width="30"/></a>
                <span><?= array_sum($_SESSION['lepanier']) ?></span>

            </div>
        </div>
    </div>
</nav>
<div>
    <div class="head">
        <div class="bot"><img alt="KeyBot" src="keybot.jpg" height="400" width="400"/></div>
        <div class="choix">
            <h1>KeyBot choisit pour vous selon vos choix !</h1>
            <a href="bot.php">
                <button>
                    Cliquez ici <img alt="keybot" src="k.png" height="20" width="20"/>
                </button>
            </a>
        </div>
    </div>
</div>

<br>
<text>
    <h1>Notre sélection des meilleurs claviers du moment :</h1>
</text>

<section class="main">
    <div class="cards">
        <div class="card1">
            <img alt="1er clavier" src="hunt.jpg" height="230" width="350"/>
            <div class="titrepro1">
                <h3>Razer Huntsman 🐍</h3>
            </div>
        </div>
        <div class="card2">
            <img src="apex.jpeg" height="230" width="350">
            <div class="titrepro2">
                <h3>Apex Pro Mini 🌞</h3>
            </div>
        </div>
        <div class="card3">
            <img src="wooting.jpg" height="230" width="350">
            <div class="titrepro3">
                <h3>Wooting 60HE+ 👑</h3>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="left">
        <div class="copy">
            <h3>© KeyBot depuis 2024 par Joshua. Tout droit réservé. </h3>
        </div>
        <div class="Contact">
            <h3>Contact : 06 50 40 30 20</h3>
        </div>
        <div class="Livraison">
            <h3>Livraison gratuite.</h3>
        </div>
        <div class="Collab">
            <h3>En collaboration avec HIIT.</h3>
        </div>
        <div class="Soutien">
            <h3>Merci pour vote soutien !</h3>
        </div>
    </div>
    <div class="right">
        <a href="https://www.facebook.com/?locale=fr_FR"><img alt="facebook" src="face.webp" height="40"
                                                              width="40"/></a>
        <a href="https://www.instagram.com/"><img alt="insta" src="insta.png" height="40" width="40"/></a>
        <a href="https://x.com/?lang=fr"><img alt="twitter" src="bird.png" height="40" width="40"/></a>
        <div class="tiktok">
            <a href="https://www.tiktok.com/discover?lang=fr"><img src="tiktok__1_-removebg-preview (1).png" height="28"
                                                                   width="28"/></a>
        </div>
    </div>
</footer>

</body>
</html>