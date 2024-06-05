<h1>Exercice 1</h1>

<p>Ecrire un algo permettant de compter le nombre de caractères contenus dans cette phrase:<p>

<h2>39<h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "La phrase contient $nbCaracteres caractères";
?>

<h1>Exercice 2</h1>

<p>A partir de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenu dans celle-ci.<p>

<h2>5<h2>

<?php

$nbMots = str_word_count($phrase);
echo "La phrase contient $nbMots mots";
?>

<h1>Exercice 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain". Afficher l'ancienne et la nouvelle phrase.<p>

<?php 

$w1 = "aujourd'hui"; 
$w2 = "demain";
$phrase = str_replace($w1,$w2,$phrase);
echo $phrase;
?>










