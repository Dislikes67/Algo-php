<h1>Exercice 2</h1>

<p>A partir de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenu dans celle-ci.<p>


<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);
echo "La phrase contient $nbMots mots";
?>