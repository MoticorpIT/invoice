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

function format_phone($dirty_phone) {
	$cleaned_phone = preg_replace("/[^a-zA-Z0-9]/", "", $dirty_phone);
	$formatted_phone = '('.substr($cleaned_phone, 0, 3).') '.substr($cleaned_phone, 3, 3).'-'.substr($cleaned_phone,6);
	return $formatted_phone;
}
