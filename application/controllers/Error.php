<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {
	
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
		$this->lang->load('sidebars', $this->language);
		$this->load->view('site/header');
		$this->load->view('site/footer');
	}
}
