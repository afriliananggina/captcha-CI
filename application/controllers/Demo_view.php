<?php
class Demo_view extends CI_Controller{
	public function index() {
		$frameworks = ['CodeIgniter', 'Yii', 'Laravel', 'symfony'];

		$this->load->view('demo_view', array('frameworks'=>$frameworks));
	}



		//public function __construct() {
		//parent::__construct();

		//$this->load->helper('url');
	//}

	//public function index() {
	
		//$this ->load->view('demo_view');

		//$konten = $this->load-view('demoview', ''TRUE);
		//echo $konten;

		//$this->load->view('headerview');
		//$this->load->view('contentview');
		//$this->load->view('footerview');

}