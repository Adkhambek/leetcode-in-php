<?php
# https://leetcode.com/problems/sqrtx/

function mySqrt($x) {
	if($x == 0) return 0;
	$start = 1;
	$end = $x / 2 + 1;
	while($start <= $end){
		$mid = $start + ($end - $start) / 2;
		if($mid == $x / $mid) return $mid;
		else if($mid < $x / $mid) $start = $mid + 1;
		else $end = $mid - 1;
	}
	return $end;
}

var_dump(mySqrt(1));
