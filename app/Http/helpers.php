<?php

function format_price($price) {
	$formatted_price = money_format('$%.2n', $price);
	// $formatted_price = number_format($price, 2, ".", ",");
	return $formatted_price;
}

function format_date($date) {
	$formatted_date = $date->format('m-d-y');
	return $formatted_date;
}
