<?php
    function cetak($length) {
    	$strr = "";
    	$characters = array_merge(range('a','z'), range('0','9'));
    	$max = count($characters) - 1;
    		for ($i = 0; $i < 28; $i++) {
        		$rand = mt_rand(0, $max);
        		$strr  .= $characters[$rand];
    		}
    		return $strr;
	}
for ($i=0; $i<3 ; $i++) { 
echo cetak(3);
echo "<br>";
}
 ?>
