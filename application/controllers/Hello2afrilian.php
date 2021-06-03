<?php
class Hello2afrilian extends CI_Controller {
	public function index() {
		
		$this->load->model('Hello2afrilian_model');

		
		$model = $this->Hello2afrilian_model;

		echo "<html>";
		echo "<head><title>Controller dan Model by Afrilian</title></head>";
		echo "<body>";

		//memanggil properti $str milik objek $model
		echo "<h2> . $model->str . </h2>";

		echo "</body>";
		echo "</html>";
	}
}