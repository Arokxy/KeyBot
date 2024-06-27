<?php
global $con;
include_once "con_bdd.php";
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['Lepanier'])) {

    $_SESSION['Lepanier'] = array();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produit = mysqli_query($con, "SELECT * FROM produits WHERE id = $id");
    if (empty(mysqli_fetch_assoc($produit))) {
        die("Ce produit n'existe pas");
    }
    if (isset($_SESSION['Lepanier'][$id])) {
        $_SESSION['Lepanier'][$id]++;
        var_dump($_SESSION['Lepanier']);
    } else {
        $_SESSION['Lepanier'][$id] = 1;
    }
    header("Location:clavierpage.php");

}
?>