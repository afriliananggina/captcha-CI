<?php

class Login extends CI_Controller
{
	public function index(){
		$this->load->model('user_model');
		$model = $this->user_model;
	
	if (isset($_POST['btnsubmit'])){

		$model->username = $_POST['username'];
		$model->password = $_POST['password'];
		if ($model->authenticate()){
			$this->load->view('login_sukses_view');
		}else{
			$this->load->view('login_error_view');
		}
		}else{
	$this->load->view('login_form_view');
		}
	
	}
}