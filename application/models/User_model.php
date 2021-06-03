<?php
class User_model extends CI_Model
{
	public $username;
	public $password;

	public $labels = [];

	public function _construct() {
		 parent::_construct();
		 $this->labels = $this->attribute_labels();
	}

	public function authenticate(){
		if (isset($this->username) && isset($this->password)){
			if ($this->username === 'Afrilian' && $this->password === '180210003'){
				return TRUE;
			} else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	public function attribute_labels(){
		return[
			'username' => 'username:',
			'password' => 'password:'
		];
	
	}
}