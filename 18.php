<?php
# https://leetcode.com/problems/add-digits/

function addDigits($num) {
	while($num > 9) {
		$sum = 0;
		while($num > 0) {
			$sum += $num % 10;
			$num = floor($num / 10);
		}

		$num = $sum;
	}
	return $num;
}

echo addDigits(38);