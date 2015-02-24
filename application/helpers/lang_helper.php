<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Detects user's language
 *
 * Tries to detect user's language, based on cookie previously set or
 * borwser's accepted languages. If none is satisfied it defaults to english.
 *
 * @return	string
 */
function language_detect() {
	$language = NULL;
	$headers_all = getallheaders();
	if ( ! empty($_COOKIE['site_lang'])) {
		$language = $_COOKIE['site_lang'];
	} else if ( ! empty($headers_all['Accept-Language']) && strpos($headers_all['Accept-Language'], 'bg') !== FALSE) {
		$language = 'bulgarian';
	} else {
		$language = 'english';
	}
	
	return $language;
}
