<?php
// Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez).

$str = "abcdefghijkl mnopqrstuvwxyz";

$frase = array();
$contador = 0;

for($i=0;$i<strlen($str);$i++){
    
    if((!in_array(strtoupper($str[$i]),$frase)) && (ord(strtoupper($str[$i])) >= 65) 
    && (ord(strtoupper($str[$i])) <= 90)){

        array_push($frase,strtoupper($str[$i]));
        $contador ++;
    }
}
if($contador == 26){
    echo 'Pangrama';
}
else{
    echo 'nao eh Pangrama';
}

?>
