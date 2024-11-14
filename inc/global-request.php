<?php
define('HOME_ID', get_option('page_on_front'));
define('PHONES', get_field('phones', HOME_ID));

$args = array(
	'numberposts' => -1,
	'post_type'   => 'servise'
);
define('SERVICES', get_posts( $args ));