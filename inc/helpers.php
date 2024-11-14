<?php

// является ли переданное число четным
function even($var) {
   return !($var & 1);
}

function formatPhoneLink($phone){
	$phone = preg_replace("/[^0-9]*/", '', $phone);
	$phone = substr($phone, 1);
	return '+7' . $phone;
}