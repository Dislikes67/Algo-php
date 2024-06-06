<?php

//version switch/case du 7
$age = 3;

switch ($age) {
    case $age>=12;
        echo "Cadet";
        break;

    case $age<=12 && $age>=9;
        echo "Minime";
        break;

    case $age<=10 && $age>=7;
        echo "Pupille";
        break;

    case $age<=8 && $age>=5;
        echo "Poussin";
        break;    

    default:
        echo "Non pris en charge";
        break;
}
?>