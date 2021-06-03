<?php

class Entri extends CI_Controller
{
	public function index(){
		$this->load->model('Produk_model');
		$model= $this->Produk_model;
		if (isset($_POST['btnsubmit'])) {
			$model->id =$_POST['id'];
			$model->nama =$_POST['nama'];
			$model->harga =$_POST['harga'];
			$model->insert();
			$this->load->view('Entri_respon_view', ['model'=>$model]);

		}else{
			$this->load->view('Entri_form_view', ['model'=>$model]);
		}
	}
	
}