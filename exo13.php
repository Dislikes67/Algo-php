<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (2 décimales).</p>

<?php

$notes = [10,12,8,19,3,16,11,13,9];

$somme = array_sum($notes);
$moyenne = $somme / count($notes);
$arrondi = round($moyenne, 2);

foreach ($notes as $note) {
    echo $note.',';
}
?> 