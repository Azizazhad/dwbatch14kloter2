<?php
function codegenerator($panjang){
    $karakter = '1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';
    $string ='';
    for ($i=0; $i < $panjang; $i++){
        $pos = rand(0, strlen($karakter)-1);
        $string .=$karakter{$pos};
    }
    return $string;
}	
	for ($d=0; $d < 5; $d++){
		echo codegenerator(28);
		echo nl2br();
	}