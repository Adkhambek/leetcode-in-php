<?php
# https://leetcode.com/problems/single-number/

function singleNumber($nums) {
	$map = [];
	foreach ($nums as $num) {
		$map[$num] = 0;
	}
	foreach ($nums as $num) {
		if(array_key_exists($num, $map)) $map[$num]++;
	}
	foreach (array_keys($map) as $key) {
		if($map[$key] === 1) return $key;
	}
}

echo singleNumber([1]);