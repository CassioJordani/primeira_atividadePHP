<?php
// Crie uma função que receba um número e retorne se é positivo, negativo ou zero.
function verificar($numero){
    if ($numero >= 0) {
        echo "Positivo";
    }
    else{
        echo "Negativo";
    }
    if ($numero == 0){
        echo "Zero";
    }
    return $numero;
}
verificar(-4);
?>
