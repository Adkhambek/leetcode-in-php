<?php
# https://leetcode.com/problems/two-sum/

//function twoSum($nums, $target) {
//	for($i = 0; $i < count($nums); $i++) {
//		for($k = $i + 1; $k < count($nums); $k++) {
//			if($nums[$k] == $target - $nums[$i]) {
//				return [$i, $k];
//			}
//		}
//	}
//}

function twoSum($nums, $target) {
	foreach ($nums  as  $key => $first_num) {
		$second_num = $target - $first_num;
		if(in_array($second_num, $nums)) {
			if(array_search($second_num, $nums) != $key) {
				return [$key, array_search($second_num, $nums)];
			}

		}
	}
}

print_r(twoSum([3,2,4], 6));
