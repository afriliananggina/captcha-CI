<?php
class Hello4afrilian extends CI_Controller {
	public function index() {
	//memuat model 'Hello4_model'
	$this->load->model('Hello4afrilian_model');

	//menangkap objek dari kelas Hello4_model
	//yang telah dimuat $model
	$model = $this->Hello4afrilian_model;

	//mengambil data dari model
	$s = $model->str;

	//membuat data yang akan dikirim ke view dalam bentuk array
	$data['teks'] = $s;

	//memuat view 'hello4view'
	//dengan mengirimkan variabel $data ke view bersangkutan
	$this->load->view('Hello4afrilianview', $data);
	}
}