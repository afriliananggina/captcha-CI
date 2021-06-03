<?php


function tambah($a, $b) {
	if (!is_numeric($a) OR !is_numeric($b)) return NULL;
	return $a + $b;
}


function kali($a, $b) {
	if (!is_numeric($a) OR !is_numeric($b)) return NULL;
	return $a * $b;
}


function bagi($a, $b) {
	if (!is_numeric($a) OR !is_numeric($b)) return NULL;
	return(double) $a / $b;
}


function pangkat($a, $b) {
	if (!is_numeric($a) OR !is_numeric($b)) return NULL;
	return pow($a,$b);
}


function akar($a) {
	if (!is_numeric($a)) return NULL;
	return sqrt($a);
}