<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros (arrondie à 2 décimales).<p>

<?php
$number = 34560.45;
$total = $number / 6.55957;
$roundNumber = round($total, 2);

echo "Montant en franc : $number<br>";
echo "Le prix en euros est de : $roundNumber €";
?>