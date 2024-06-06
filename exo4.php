<h1>Exercice 4</h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome.<p> 

<?php
$phrase = "Engage le jeu que je le gagne"; //phrase de base
$phraseMin = strtolower($phrase); //la phrase mise en minuscule
$phraseSansEspaces = str_replace(" ","", $phraseMin); //remplacement des espaces par pas d'espaces -->  (" ","", $phraseMin)
$phraseReverse = strrev($phraseSansEspaces); // reverse pour comparaison des deux phrases
// Toujours faire étape par étape
if($phraseSansEspaces == $phraseReverse) {
    echo "La phrase est palindrome";
} else {
    echo "La phrase n'est pas palindrome";
}

// ternaire / alternative au "if - else"
echo ($phraseSansEspaces == $phraseReverse) ? "Phrase est palindrome" : "Phrase non palindrome";
?>













