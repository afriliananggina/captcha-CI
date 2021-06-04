<?php
class Captcha_helper extends CI_Controller {
	public function _construct() {
	parent::_construct();

	$this->load->helper(['captcha','url']);
}
public function index() {
	if (isset($_POST['btnSubmit'])) {
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];
		$teks = $_POST['teks'];

		echo "<h2>Demo Membuat CAPTCHA Afrilian Anggina</h2>";
		echo "Nama: " . $nama . "<br />";
		echo "Komentar: " . $komentar . "<br />";
		echo "Teks (CAPTCHA): " . $teks . "<br />";
	} else {
		$angka_acak = substr(number_format(time() . rand(),0,'',''),0,6);

			$vals = [
				'word' => $angka_acak,
				'img_path' => "./captcha/",
				'img_url' => base_url()."captcha/",
				'font_path' => BASEPATH . 'system/fonts/textb.ttf',
				"font_size" => 16,
				"img_width" => 130,
				"img_height" => 35,
				"expiration" => 7200

			];
			$captcha = create_captcha($vals);
			$this->load->view('captcha_helper_view',['captcha'=>$captcha]);

			}

	}
}