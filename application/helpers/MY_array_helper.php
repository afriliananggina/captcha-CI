<?php


function max_element($array) {
	if (is_array($array)) {
		if (!isset($array[0])) return NULL;

		$max = $array[0];
		foreach ($array as $element) {
			if ($element > $max) {
				$max = $element;
			}
		}
		return $max;
	} else {
		return NULL;
	}
}


function min_element($array) {
	if (is_array($array)) {
		if (!isset($array[0])) return NULL;

		 $min = $array[0];
		 foreach ($array as $element) {
		 	if ($element < $min) {
		 		$min = $element;
		 	}
		 }
		 return $min;
	} else {
		return NULL;
	}
}

function sort_array($array) {
	if (!is_array($array)) return NULL;
	for ($i=0; $i<sizeof($array)-1; $i++) {
		for ($j=sizeof($array)-1; $j>=$i+1; $j--) {
			if ($array[$j] < $array[$j-1]) {
				$temp = $array[$j];
				$array[$j] = $array[$j-1];
				$array[$j-1] = $temp;
			}
		}
	}
	return $array;
}

function reverse_array($array) {
	if (!is_array($array)) return NULL;
	$temp = [];
	$j = 0;
	for ($i=sizeof($array)-1; $i>=0; $i--, $j++) {
		$temp[$j] = $array[$i];
	}
	return $temp;
}

function print_array($array) {
	if (!is_array($array)) return;
foreach ($array as $element) {
	echo $element ." ";
	}
}

function random_element($array) {
	shuffle($array);
	return array_pop($array);
}