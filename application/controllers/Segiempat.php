<?php
	class Segiempat extends CI_Controller {
		public function index() {
			if (isset($_POST['btnSubmit'])) {


				$model = $this->Segiempat_model;

				//mengambil nilai yang dikirim melalui form
				$p = $_POST['panjang'];
				$l = $_POST['lebar'];

				//menentukan nilai atribut $panjang dan $lebar di dalam model
				$model->set_panjang($p);
				$model->set_lebar($l);

				//memuat view dan mengirimkan $model ke view
				$this->load->view('segiempatview', array('model'=>$model));
				} else {
					$this->load->view('segiempat_form_view');
			}
		}
	}