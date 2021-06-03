<?php
class Demo_helper extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//memuat file helper 'matematika_helper.php'
		$this->load->helper('matematika');
	}

	public function index() {
		//array yang akan diproses di dalam view
		$data = [
			'a' => 10,
			'b' => 3,
			'c' => 25
		];

		//mengirim $data ke view
		$this->load->view('demo_helper_view', $data);
	}
}
