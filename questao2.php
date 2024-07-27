<?php
// Verifique se um número é primo ou não.
function testarPrimo($numero){ 
    if ($numero <= 1){
        echo "NAO PRIMO";
    }
	for ($i = 2; $i<$numero; $i++){ 
		if ($numero % $i == 0){
            return false;
        }else{
            return true;
        }
	} 
}

if (testarPrimo(10)){
    echo "eh primo";
}else{
    echo "nao eh primo";
}
?>
