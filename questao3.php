<?php
// Inverta uma string sem usar a função strrev().
function inverterString($str){
    $tamanho = strlen($str);
    $strInvertida = '';

    for ( $i = $tamanho -1; $i >= 0; $i--){
        $strInvertida .= $str[$i];
    }
    return $strInvertida;
}

$str = "exemplo";
echo inverterString($str);
?>
