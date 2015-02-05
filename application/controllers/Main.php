<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	private $language;
	
	public function __construct() {
		parent::__construct();
		$this->_language_detect();
	}
	/**
	 * Index Page for this controller.
	 */
	public function index() {
		$this->lang->load('header_footer', $this->language);
		$this->lang->load('home', $this->language);
		$this->lang->load('sidebars', $this->language);
		$this->load->view('site/header');
		$this->load->view('site/home');
		$this->load->view('site/footer');
	}
	
	private function _language_detect() {
		if ( ! empty($_COOKIE['site_lang'])) {
			$this->language = $_COOKIE['site_lang'];
		} else {
			$this->language = 'english';
		}
	}
	public function language_switch($language = NULL) {
		$language = $language !== NULL ? $language : 'bulgarian';
		// Set language cookie to last for an year from now
		setcookie("site_lang", $language, time() + 31536000, '/');
		echo json_encode(array('lang' => $language));
    }
}
