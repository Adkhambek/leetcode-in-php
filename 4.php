<?php
#https://leetcode.com/problems/third-maximum-number/
function thirdMax($nums) {
	if(count($nums) < 3) return max($nums);
	 $unique_num = array_unique($nums);
	if(count($unique_num) < 3) return max($nums);
	rsort($unique_num);
	return $unique_num[2];
}

print_r(thirdMax([3,2,1,3,2]));