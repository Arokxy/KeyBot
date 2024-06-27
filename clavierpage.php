<?php global $con; ?>
<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/html" lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>KeyBot Claviers</title>
    <link rel="stylesheet" href="styleclav.css">
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
            <a class="clavier" href="clavierpage.html">
                <h2>Claviers</h2>
            </a>
            <form class="barre">
                <label class="rech-field">
                    <input type="search" placeholder="Recherche">
                </label>
                <a class="rech-icon"><img src="loupe.png" height="30" width="30"/></a>
            </form>
            <div class="panier">
                <a href="panier.php"><img alt="Panier"
                                          src="paier_noir-.png"
                                          height="30"
                                          width="30"/></a>
                <span><?= array_sum($_SESSION['Lepanier']) ?></span>
            </div>
        </div>
    </div>
</nav>
<h1 class="hautclav">Claviers ⌨️ :</h1>
<main>
    <div class="produit">
        <?php
        include_once "con_bdd.php";
        $req = mysqli_query($con, "SELECT * FROM produits");
        while ($row = mysqli_fetch_assoc($req)) {
            ?>
            <div class="K650">
                <img class="img" src="<?= $row['img'] ?>" height="150" width="250"/>
                <div class="desc1 font-family-roboto">
                    <h2><strong><?= $row['name'] ?></strong></h2>
                    <p class="font-size-13 font-family-poppins width italic"><?= $row['descri'] ?></br>
                        <strong><?= $row['price'] ?>€</strong>
                    </p>
                    <a href="ajouter_panier.php?id=<?= $row['id'] ?>">
                        <button class="ajouter">
                            <img class="logo-panier" src="panier ajouter.png" height="20" width="20"/>
                        </button>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

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