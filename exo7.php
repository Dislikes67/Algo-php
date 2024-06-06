<h1>Exercice 7 </h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge<p>

<?php
//Poussin entre 6 et 7 ans, Pupille entre 8 et 9 ans, Minime entre 10 et 11 ans, Cadet à partir de 12 ans.
$age = 10;

if ($age>=12) {
    
    echo "cadet";
}
elseif ($age<=12 && $age>=9) {

    echo "Minime";
}
elseif ($age<=10 && $age>=7) {

    echo "Pupille";
}
elseif ($age<=8 && $age>=5) {

    echo "Poussin";
}
else {
    echo "Non pris en charge";
}
?>