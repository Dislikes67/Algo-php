<h1>Exercice 9</h1>

<p>Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors cette personne est imposable (sinon "non imposable").<p>

<?php 
$age =30;
$sexe ="H";
echo "Age : $age<br>";
echo "Sexe : $sexe<br>";

if (($sexe=="F" && $age>=18 && $age<=35) || ($sexe=="H" && $age>20)) { // utiliser les ||(ou) pour ajouter une condition sur la même ligne
    echo "La personne est imposable.<br>";
}
else {
    echo "La personne est non imposable.<br>";
}
?>

