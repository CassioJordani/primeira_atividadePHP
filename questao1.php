<?php

$string = 'coisa';
$vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
echo 'Palavra a ser substituida: ', $string;

foreach($vogais as $vogal){
    $string = str_replace($vogal, '*', $string);
}

echo '<br>';
echo 'Vogais substituidas por *: ',$string;
?>