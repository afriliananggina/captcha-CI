<?php
class Lingkaran extends CI_Controller {
	public function index() {
		if (isset($_POST['btnsubmit'])) {

			// memuat model Lingkaran_model
			$this->load->model('Lingkaran_model');

			// menangkap model yang telah dimuat oleh controller
			$model = $this->Lingkaran_model;

			// mengambil nilai yang dikirim melalui form
			$radius = $_POST['jari2'];

			// memuat model Lingkaran_model
			//$this->load->model('Lingkaran_model');

			// menangkap model yang telah dimuat oleh controller
			//$model =
			//$this->Lingkaran_model;

			// menentukan nilai $radius
			$model->set_radius($radius);

			// memuat view dan mengirimkan $model ke view
			$this->load->view('lingkaranview',array('model'=>$model));

		} else {

			// menampilkan form
			$this->load->view('lingkaran_form_view');
		}
	}
}
