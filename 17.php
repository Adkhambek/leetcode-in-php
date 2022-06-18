<?php

//function isAnagram($s, $t) {
//	$map = [];
//	foreach (str_split($s) as $letter) {
//		if(!array_key_exists($letter, $map)) $map[$letter] = 1;
//		else $map[$letter]++;
//	}
//	foreach (str_split($t) as $letter) {
//		if(array_key_exists($letter, $map)) {
//			$map[$letter]--;
//			if($map[$letter] === 0) unset($map[$letter]);
//		} else return false;
//	}
//	return count($map) === 0;
//}

function isAnagram($s, $t) {
	$map = [];
	foreach (str_split($s) as $letter) {
		if(!array_key_exists($letter, $map)) $map[$letter] = 1;
		else $map[$letter]++;
	}
	foreach (str_split($t) as $letter) {
		if(array_key_exists($letter, $map)) {
			$map[$letter]--;
		} else return false;
	}
	foreach ($map as $key => $val) {
		if($map[$key] !== 0) return false;
	}
	return true;
}

var_dump(isAnagram("ab", "a"));