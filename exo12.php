<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langes associée, dire bonjour aux différentes personnes dans leur langue respective en utlisant un switch.</p>


<?php
$personnes = 
    [
        "Bonjour" => "Mickael",
        "Hola" => "Virgile",
        "Guten morgen" => "Marie-Claire",
    ];


foreach ($personnes as $key => $value)
    echo '<p>'.$key.'  '.$value.'</p>';
?>