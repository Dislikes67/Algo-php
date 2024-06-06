<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal).<p>

<?php
$prixHT = 15.99;
$nbArticles = 20;
$totalHT = $prixHT * $nbArticles;
$tauxTVA = 0.20;
$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
echo "Prix unitaire de l'article : 15.99 <br>";
echo "Quantité : $nbArticles <br>";
echo "Taux de TVA : $tauxTVA <br>";
echo "Le montant de la facture à régler est de : $totalTTC €";
?>