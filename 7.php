<?php
# https://leetcode.com/problems/number-of-segments-in-a-string/

function countSegments($s) {
	$arr = explode(" ", $s);
	$filteredArr = array_filter($arr);
	return count($filteredArr);
}

var_dump(countSegments(""));