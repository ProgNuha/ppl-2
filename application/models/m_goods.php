<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_goods extends CI_Model {
	public function show_data()
	{
		return $this->db->get('goods');
	}
}