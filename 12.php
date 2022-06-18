<?php
# https://leetcode.com/problems/plus-one/

function plusOne($digits) {
	$end = count($digits) - 1;
	$carry = 1;
	while ($end >= 0) {
		$digits[$end] += $carry;
		if($digits[$end] < 9) return $digits;
		$carry = floor($digits[$end] / 10);
		echo $carry."<br>";
		$digits[$end] %= 10;
		$end--;
	}
	if($digits[0] === 0) array_unshift($digits, 1);
	return $digits;
}

print_r(plusOne([9,8,9]));
echo "<br>";
print_r(plusOne([1,2,9]));
echo "<br>";
print_r(plusOne([1,9,9]));
echo "<br>";
print_r(plusOne([9,9,9]));
echo "<br>";