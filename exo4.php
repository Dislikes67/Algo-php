<h1>Exercice 4</h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome.<p> 

<?php
    function Palindrome($string){
        if (strrev($string) == $string){
            return 1;       
        }
        else{
        return 0;
        }
    }
    
    $phrase2 = "ta bete te bat";  //streplace strtolower strrev
        if(Palindrome($phrase2)){
            echo "Palindrome";
    }
    else{
    echo "Not a Palindrome";
}
?>