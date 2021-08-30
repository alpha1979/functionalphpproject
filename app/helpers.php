<?php 


function formatCurrency(float $amount): string {
	$isNegative = $amount < 0;

	return ($isNegative ? '-' :'') .'£'.number_format(abs($amount),2);
}