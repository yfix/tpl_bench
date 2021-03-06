<?php

include('../data.inc'); 

$GLOBALS['PROJECT_CONF']['main']['USE_SYSTEM_CACHE'] = 1;
#$GLOBALS['PROJECT_CONF']['main']['OUTPUT_CACHING`'] = 1;
if (!defined('YF_PATH')) {
	define('YF_PATH', '/home/www/yf/');
	require YF_PATH.'classes/yf_main.class.php';
	new yf_main('user', 1, 0);
}

$replace = array(
	'num_total' => $_STAT['TOTAL'],
	'num_online'=> count($_STAT['ONLINE']),
	'poll_title' => $_POLL['TITLE'],
	'poll_question' =>  $_POLL['QUESTION'],
	'poll_button' => $_POLL['BUTTON'],
);

shuffle($_ADVERTS);
$replace['adverts'] = array_slice($_ADVERTS, 0, 3);
$replace['sections'] = $_SECTIONS;
$replace['users'] = $_STAT['ONLINE'];
$replace['news'] = $_NEWS;
$replace['poll_answers'] = $_POLL['ANSWERS'];

tpl()->COMPILE_TEMPLATES = true;
echo tpl()->parse_string(file_get_contents('main.stpl'), $replace, 'lebovski');
