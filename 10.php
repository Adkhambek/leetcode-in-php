<?php
# https://leetcode.com/problems/search-insert-position/

function searchInsert($nums, $target) {
	for ($i = 0; $i <= count($nums); $i++){
		if($nums[$i] == $target) return $i;
	}
}

var_dump(searchInsert([1,3,5,6], 5));

// TODO: not done yet