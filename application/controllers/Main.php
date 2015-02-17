<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	/**
	 * Site's view language
	 *
	 * Used for loading language files
	 *
	 * @var	string
	 */
	private $language;
	
	// --------------------------------------------------------------------

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct() {
		parent::__construct();
		$this->_language_detect();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Main processing function, acting as a router to all subpages.
	 *
	 * @return void
	 */
	public function index() {
		$this->lang->load('header_footer', $this->language);
		$this->lang->load('home', $this->language);
		$this->lang->load('sidebars', $this->language);
		$this->load->view('site/header');
		$this->load->view('site/home');
		$this->load->view('site/footer');
	}
	
	// --------------------------------------------------------------------

	/**
	 * Detects user's language
	 *
	 * Tries to detect user's language, based on cookie previously set or
	 * borwser's accepted languages. If none is satisfied it defaults to english.
	 *
	 * @return	void
	 */
	private function _language_detect() {
		$headers_all = getallheaders();
		if ( ! empty($_COOKIE['site_lang'])) {
			$this->language = $_COOKIE['site_lang'];
		} else if ( ! empty($headers_all['Accept-Language']) && strpos($headers_all['Accept-Language'], 'bg') !== FALSE) {
			$this->language = 'bulgarian';
		} else {
			$this->language = 'english';
		}
	}
	
	// --------------------------------------------------------------------

	/**
	 * Switch site's view languge
	 *
	 * Accepts an language string and applies is it as default view language.
	 *
	 * @param	string	$language
	 * @return	void
	 */
	public function language_switch($language = NULL) {
		$language = $language !== NULL ? $language : 'english';
		// Set language cookie to last for an year from now
		setcookie("site_lang", $language, time() + 31536000, '/');
		echo json_encode(array('lang' => $language));
    }
}
