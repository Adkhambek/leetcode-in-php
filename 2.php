<?php
#https://leetcode.com/problems/palindrome-number/
function isPalindrome($x) {
	if($x < 0) return false;
	$revX = +strrev(strval($x));
	return $x === $revX;
}

var_dump(isPalindrome(121));
echo 121 % 10;