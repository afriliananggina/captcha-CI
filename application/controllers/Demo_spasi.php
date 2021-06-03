<?php
class Demo_spasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
	}
	public function index() {
		$this->load->view('demo_spasi_view');
	}
}