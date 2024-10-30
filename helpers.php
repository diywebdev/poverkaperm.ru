<?php
function formatPhoneLink($phone){
	$phone = preg_replace("/[^0-9]*/", '', $phone);
	$phone = substr($phone, 1);
	echo '+7' . $phone;
}