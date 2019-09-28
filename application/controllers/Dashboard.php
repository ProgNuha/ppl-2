<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
		$data['goods'] = $this->m_goods->show_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function add_to_cart($id){
		$good = $this->m_goods->find($id);
		$data = array(
			'id'      => $good->code,
			'qty'     => 1,
			'price'   => $good->price,
			'name'    => $good->name,
			'info' 	  => $good->info
		);
	
		$this->cart->insert($data);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('add_to_chart', $data);
		$this->load->view('templates/footer');
	}

	public function test(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('add_to_chart');
		$this->load->view('templates/footer');
	}
}
