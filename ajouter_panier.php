<?php
global $con;
include_once "con_bdd.php";
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['lepanier'])) {

    $_SESSION['lepanier'] = array();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produit = mysqli_query($con, "SELECT * FROM produits WHERE id = $id");
    if (empty(mysqli_fetch_assoc($produit))) {
        die("Ce produit n'existe pas");
    }
    if (isset($_SESSION['lepanier'][$id])) {
        $_SESSION['lepanier'][$id]++;
        var_dump($_SESSION['lepanier']);
    } else {
        $_SESSION['lepanier'][$id] = 1;
    }
    header("Location:clavierpage.php");

}
?>