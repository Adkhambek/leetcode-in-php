<?php
# https://leetcode.com/problems/length-of-last-word/

function lengthOfLastWord($s) {
	$arr = explode(" ", trim($s));
	return strlen($arr[count($arr) - 1]);
}

lengthOfLastWord("   fly me   to   the moon  ");