<?php
// Crie uma função que verifique se uma palavra é um palíndromo.
function Palindromo($string){
     
    if ((strlen($string) == 1) || (strlen($string) == 0)){
        echo "Palindromo";
    }
 
    else{
         
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){
             
            return Palindromo(substr($string,1,strlen($string) -2));
        }
        else{
            echo " nao e palindromo"; }
    }
}
 
$string = "ovor";
Palindromo($string);
?>
