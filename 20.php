<?php
# https://leetcode.com/problems/missing-number/

//1.
function missingNumber1($nums) {
	$start = min($nums);
	$end = max($nums);
	for ($i = $start; $i <= $end; $i++){
		if(!in_array($i, $nums)) return $i;
	}
	if(!in_array(0, $nums)) return 0;
	return $end + 1;
}

//2.
function missingNumber2($nums) {
	$n = max($nums);
	$sum = $n * ($n + 1) / 2;
	foreach ($nums as $num){
		$sum -= $num;
	}
	if(in_array(0, $nums) && $sum == 0) return $n+1;
	return $sum;
}

//3.
function missingNumber($nums) {
	sort($nums);
	for ($i = 0; $i < count($nums) - 1; $i++) {
		if($nums[$i] !== $nums[$i + 1] - 1) {
			return $nums[$i] + 1;
		}
	}
	if(!in_array(0, $nums)) return 0;
	return $nums[count($nums) - 1] + 1;
}

echo missingNumber([9,6,4,2,3,5,7,0,1]);
echo missingNumber([1]);