<?php
/**
 * 
 */
class variable extends CI_Controller
{
	
	public function index()
	{
		$data = ['variable1' => 'CodeIgniter', 'variable2' =>'3.x'];
		//mengirim data ke view
		$this->load->view('variableview', $data);
	}
}