<?php
/**
 *
 */
class Lingkaran_model extends CI_Model
{
	//mendefenisikan konstanta untuk nilai PI
	const PI = 3.14;

	//atribut model
	private $radius;

	//metode untuk mengambil nilai radius
	public function set_radius($r)
	{
		$this->radius = $r;
	}

	//metode untuk mengambil nilai radius
	public function get_radius()
	{
		return $this->radius;
	}

	//metode untuk menghitung luas lingkaran
	public function hitung_luas()
	{
		return self::PI * $this->radius * $this->radius;
	}

	//metode untuk menghitung keliling lingkaran lingkaran
	public function hitung_keliling()
	{
		return 2 * self::PI * $this->radius;
	}

}
