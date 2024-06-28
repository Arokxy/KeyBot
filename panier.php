<?php
global $con;
session_start();
include_once "con_bdd.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Panier KeyBot</title>
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
                <!--                <span>--><?php //= array_sum($_SESSION['lepanier']) ?><!--</span>-->
            </div>
        </div>
    </div>
</nav>
<h1 class="shop">Votre panier :</h1>
<div class="basdepage">
    <section>
        <?php
        include_once "con_bdd.php";
        if (isset($_GET['del'])) {
            $id_del = $_GET['del'];
            unset($_SESSION['lepanier'][$id_del]);
        }

        $ids = array_keys($_SESSION['lepanier']);
        if (!empty($ids)) {

            ?>
            <table>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Supprimer</th>
                    <th>Lien</th>
                </tr>
                <?php
                $total = 0;
                if (!empty($ids)) {
                    $produits = mysqli_query($con, "SELECT * FROM produits WHERE id IN (" . implode(',', $ids) . ")");
                    foreach ($produits as $produit):
                        $total = $total + $produit['price'] * $_SESSION['lepanier'][$produit['id']];
                        ?>
                        <tr>
                            <td><img src="<?= $produit['img'] ?>" height="150" width="250"/></td>
                            <td><?= $produit['name'] ?></td>
                            <td><?= $produit['price'] ?>€</td>
                            <td><?= $_SESSION['lepanier'][$produit['id']] ?></td>
                            <td>
                                <a href="panier.php?del=<?= $produit['id'] ?>"><img src="poubelle.png" height="40"
                                                                                    width="40"/></a>
                            </td>
                            <td>
                                <a href="<?= $produit['link'] ?>">
                                    <img src="link.png" height="40" width="40"/>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;
                } ?>
                <tr class="total">
                    <th>Total : <?= $total ?>€</th>
                </tr>
                <tr class="nobor">
                    <td class="nobor" style="height: 20px;"></td>
                </tr>
                <tr class="paypal">
                    <th>
                        <a href="https://www.paypal.com/signin" class="nobottom">
                            <button class="paye">
                                <h1>Payez maintenant avec </h1>
                                <img src="PayPal-Logo.png" height="80" width="140">
                            </button>
                        </a>
                    </th>
                </tr>
            </table>

            <?php
        } else {
            ?>
            <img alt="Vide" src="vide.jpg" height="350px" width="350px">
            <?php
        }
        ?>
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
                <a href="https://www.tiktok.com/discover?lang=fr"><img src="tiktok__1_-removebg-preview (1).png"
                                                                       height="28"
                                                                       width="28"/></a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>