<?php

class Home extends CI_Controller {

	public function index($nama ='')

	{
		
		$data['judul'] = 'Halaman Home';
		$data['nama']  = $nama;
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/index', $data);
		$this->load->view('frontend/templates/footer');

	}

}

