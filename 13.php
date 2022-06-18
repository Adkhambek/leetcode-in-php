<?php
# https://leetcode.com/problems/climbing-stairs/

function climbStairs($n) {
	$a = 1;
	$b = 1;
	while($n > 0) {
		$b += $a;
		$a = $b - $a;
		$n--;
	}
	return $a;
}

echo climbStairs(5);