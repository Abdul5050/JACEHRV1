<?php

function trim_words($content,$counter,$end_symbol){
	$words_array = explode(' ',$content);
	$total_words = count($words_array);
	if($total_words<$counter)
		$counter = $total_words;
	for($i=0;$i<$counter;$i++){
		echo $words_array[$i].' ';
	}
	echo $end_symbol;
}


?>