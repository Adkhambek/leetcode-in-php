<?php
# https://leetcode.com/problems/power-of-two/

function isPowerOfTwo($n) {
	return ($n != 0) && (($n & ($n - 1)) == 0);
}

var_dump(isPowerOfTwo(0));