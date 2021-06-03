<?php
class Demo_controller extends CI_Controller {

public function index() {
	echo "<h2>Demo Controller</h2>";
	echo "Metode index() [aksi default] dipanggil";
}

public function aksi() {
	echo "<h2>Demo Controller</h2>";
	echo "Metode aksi() [aksi lain] dipanggil";
}
}