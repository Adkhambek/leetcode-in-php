<?php
# https://leetcode.com/problems/remove-element/

function removeElement($nums, $val) {
	$count = count($nums);
	for ($i = 0; $i < $count; $i++) {
		if($nums[$i] === $val) unset($nums[$i]);
	}
	return count($nums);
}

var_dump(removeElement([0,1,2,2,3,0,4,2], 2));