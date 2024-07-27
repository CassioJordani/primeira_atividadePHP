<?php
// Crie uma função que remova os espaços em branco de uma string.

function removerespaco($str){
    return str_replace(" ", "", $str);
}

$texto = " testando os espacos em branco ";
$textosemespaco = removerespaco($texto);
echo $textosemespaco;
?>
