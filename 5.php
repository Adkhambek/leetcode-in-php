<?php
# https://leetcode.com/problems/implement-strstr/

function strStrd($haystack, $needle) {
	if(empty($needle)) return 0;
	$pos = strpos($haystack, $needle);
	return $pos === false ? -1 : $pos;
}

var_dump(strStrd("hello", "el"));
