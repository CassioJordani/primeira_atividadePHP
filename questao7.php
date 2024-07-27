
<?php
// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por 5
function numero_substituido(){
    for ($i = 1; $i<21; $i++){
        if ($i % 3 == 0){
            echo "5\n";
        }else{
            echo "$i\n";
        }
    }
}
numero_substituido()
?>