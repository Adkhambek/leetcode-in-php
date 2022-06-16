<?php
function romanToInt($s) {
	$result = 0;
	$roman = str_split($s);
	$arabic = [
		"I" => 1,
		"V" => 5,
		"X" => 10,
		"L" => 50,
		"C" => 100,
		"D" => 500,
		"M" => 1000
	];

	foreach ($roman as $key1 => $num1) {
		foreach ($arabic as $key2 => $num2) {
			if($key2 === $num1) $roman[$key1] = $num2;
		}
	}
	for($i = 0; $i < count($roman); $i++) {
		if(isset($roman[$i + 1]) && $roman[$i] < $roman[$i + 1]) {
			$roman[$i] *= -1;
		}
		$result += $roman[$i];
	}
	return $result;
}

var_dump(romanToInt("MCMXCIV"));