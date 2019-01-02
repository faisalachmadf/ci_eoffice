<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');

		if ($this->session->userdata('is_logged') == ''){
			redirect(base_url('admin/common/login'));
		}
		else {
			redirect(base_url('admin/common/dashboard'));
		}
	}

	public function index()
	{
		if ($this->session->userdata('is_logged') == ''){
			redirect(base_url('admin/common/login'));
		}
		else {
			redirect(base_url('admin/common/dashboard'));
		}
	}
}

