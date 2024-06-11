<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10€ et 5€, de pièces de 2€ et 1€.</p>


<?php

// billet de 10e, 5e pieces de 2e et 1e
$montantaPayer = 152;
$montantVerse = 200;
$rendu = 48;

$dix = intdiv($rendu,10);           // Est ce qu'il y a un moyen de directement mettre le texte dans la variable ?
$reste = ($rendu % 10);

$cinq = intdiv($reste,5);
$reste2 = ($reste % 5);

$deux = intdiv($reste2,2);
$reste3 = ($reste2 % 2);

$un = intdiv($reste3,1);
$reste4 =($reste3 % 1);

echo "Montant à payer : $montantaPayer<br>";
echo "Montant versé : $montantVerse<br>";
echo "Reste à payer : $rendu<br>";
echo "*****************************************<br>";
echo "Rendu de monnaie : <br> $dix billets de 10€  - $cinq billet de 5€ - $deux pièce de 2€ - $un pièce de 1€";















?>