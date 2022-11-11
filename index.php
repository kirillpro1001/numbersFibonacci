<!--
Числа Фибоначчи - это последовательность чисел, в которой первые два числа это 0 и 1, а каждое следующее число равно сумме двух предыдущих.

В этой задаче вам нужно написать код, который будет выводить первые n чисел этой последовательности. 
-->

<?php

function numbersFibonacci ($amount) {
	$startNumbers = [0,1];
	for ($i = 1; $i <= $amount - 2; $i++) {
		$startNumbers[]=$startNumbers[count($startNumbers)-1]+$startNumbers[count($startNumbers)-2];
	}
	return $startNumbers;
}

foreach (numbersFibonacci(6) as $value) {
	echo "{$value} ";
}