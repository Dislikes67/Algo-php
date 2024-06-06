<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication avec deux types de boucles.<p>

<?php
//Table de 8 :
//1 x 8= 8 - --etc
$nb = 8;

for ($i=1; $i <=10 ; $i++) { 
    $result= $nb * $i;
    echo "$i x $nb= $result<br>";
}
?>
<p>Deuxième type de boucle<p>

<?php
// while
$nb = 8;
$i2 = 1;
while ($i2 <= 10) {
    $result= $nb * $i2;
    $i2++;
    echo "$i2 x $nb= $result<br>";
}
?>