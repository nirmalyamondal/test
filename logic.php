<?php

$result = [];
$needle = '7';
for($i=1; ; $i++) {
	$iSplit 	= str_split($i);	
	$iSplitSum 	= array_sum($iSplit);
	if(($iSplitSum == 10) && (strpos($i, $needle ) !== false)) { 
		$result[] = $i;
		if(count($result) == 10){
			break;
		}
		
	}
}
echo '<pre>'; print_r($result);