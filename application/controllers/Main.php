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
		$this->load->helper('lang');
		$this->language = language_detect();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Index Page for this controller.
	 *
	 * Main processing function, acting as a router to all subpages.
	 *
	 * @return void
	 */
	public function index() {
		$this->lang->load('header_footer', $this->language);
		$page = $this->uri->segment(1);
		if (empty($page)) {
			$page = 'home';
		}
		
		$this->lang->load('sidebars', $this->language);
		$header = $this->load->view('site/header', '', TRUE);
		$content = $this->$page();
		$footer = $this->load->view('site/footer', '', TRUE);
		
		echo $header . $content . $footer;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Load home subpage
	 *
	 * @return	string
	 */
	private function home() {
		$this->lang->load('home', $this->language);
		
		return $this->load->view('site/home', '', TRUE);
    }
	
	// --------------------------------------------------------------------

	/**
	 * Switch site's view languge
	 *
	 * Accepts an language string and applies it as default view language.
	 *
	 * @param	string	$language
	 *
	 * @return	void
	 */
	public function language_switch($language = NULL) {
		$language = $language !== NULL ? $language : 'english';
		// Set language cookie to last for an year from now
		setcookie("site_lang", $language, time() + 31536000, '/');
		echo json_encode(array('lang' => $language));
    }
}
