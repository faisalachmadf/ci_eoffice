<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // {c} Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/login');

        $this->load->library('session');
        $this->load->helper('url');
        
        // {c} Load Template Admin
        // {c} $this->load->library('template_admin');
    	$this->_init();
    }

    public function _init()
	{	
		// {c} Ambil Core MY_Output
		// {c} Ambil Template Admin
		// {c} views/admin/t_admin.php
		$this->output->admin_template('t_admin');

	}

    /**
    {c}
	function index()
	{
		if($this->session->userdata('level')==2){
			redirect(base_url().'admin/home');
		} else {
			$data=array(
				'nama_user'	=> $this->session->userdata('nama_user'),
				'id_user'		=> $this->session->userdata('id_user'),
			);
			$this->template_admin->display('admin/login',$data);
			echo $this->session->userdata('hak_akses');
		}
	}
    */
    
	public function index() {

		// {F} Judul
		$this->output->setTitle('Dashboard');
		
		$data['admin'] = 'Admin';

		// {c} print "<pre>"; print_r($this->session->userdata()); exit;
		
		$this->load->view('admin/common/v_dashboard', $data);
	}

}