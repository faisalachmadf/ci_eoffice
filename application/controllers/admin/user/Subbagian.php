<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subbagian extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // {c} Cek Sesi Login
        if ($this->session->userdata('is_logged') == '')
		redirect(base_url().'admin/login');

        $this->load->database();
        $this->load->library('encrypt');
        $this->load->library('session');
        // {c} Load Template Admin
        // {c} $this->load->library('template_admin');
        $this->load->library('pagination');
        $this->load->library('parser');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('m_user');
        $this->load->model('m_bagian');
        $this->load->model('m_subbagian');
		$this->_init();
    }

    public function _init()
	{	
		// {c} Ambil Core MY_Output
		// {c} Ambil Template Admin
		// {c} views/admin/t_admin.php
		$this->output->admin_template('t_admin');
	}

	public function index()
	{
		// {c} Judul
		$this->output->setTitle('Subbagian');

		// {c} Ambil Sesi Disini
		$data['sesi_role']		= $this->session->userdata('role');

		$config['base_url'] 	   	= base_url() . 'admin/user/subbagian/';
		$config['total_rows']	   	= $this->m_subbagian->hitung_semua();
		$config['per_page']		   	= 10;
		$config['uri_segment']   	= 3;
		$config['cur_tag_open']  	= '<a href="#">';
		$config['cur_tag_close'] 	= '</a>';
		$config['next_link']     	= 'selanjutnya';
		$config['prev_link']     	= 'sebelumnya';

		$this->pagination->initialize($config);
		
		$data['paging']		= $this->pagination->create_links();
		$data['noo']		= $this->uri->segment(3);
		$data['subbagians']	= $this->m_subbagian->ambil_semua($config['per_page'], $this->uri->segment(3));

		$this->load->view('admin/user/v_subbagian_list', $data);
	}

	public function tambah()
	{
		// {c} Judul
		$this->output->setTitle('Tambah');

        // {c} ambil data bagian
		$data['bagians']  = $this->m_bagian->ambil_semua_bagian();

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|max_length[32]');

        if ($this->form_validation->run() == FALSE)
        {	
        	$this->load->view('admin/user/v_subbagian_tambah', $data);
        } else {
            $this->m_subbagian->tambah();
            // {F} ditambahkan untuk Parameter ditambahkan Sweetalert
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(base_url().'admin/user/subbagian');
        }
	}

	public function ubah($id = null)
	{	
		if (!isset($id)) redirect(base_url().'admin/user/subbagian');
		
		// {c} Judul
		$this->output->setTitle('Ubah'); 

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|max_length[32]');

        if ($this->form_validation->run() == FALSE)
        {	
        	$data['subbagian'] = $this->m_subbagian->ambil_by_id($id);

            // {c} ambil data bagian
            $data['bagians']  = $this->m_bagian->ambil_semua_bagian();

            // {c} Jika tidak ditemukan $id maka akan tampil 404/error
    		if (!$data["subbagian"]) show_404();

    		$this->load->view('admin/user/v_subbagian_ubah', $data);
        }
        else {

        	$id = $this->input->post("id");

			$this->m_subbagian->ubah($id);
        	// {F} ditambahkan untuk Parameter ditambahkan Sweetalert
            $this->session->set_flashdata('flash', 'Diubah');
        	// {c} Jika Berhasil
        	redirect(base_url().'admin/user/subbagian');
        }
	}

	public function hapus($id=null)
    {   
        // {c} Jika tidak ditemukan $id maka akan tampil 404/error
        if (!isset($id)) show_404();
        
        if ($this->m_subbagian->hapus($id)) {
            // {F} ditambahkan untuk Parameter ditambahkan Sweetalert
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(base_url().'admin/user/subbagian');
        } else {

        	// {c} Jika Berhasil
        	redirect(base_url().'admin/user/subbagian');
        }
    }
    /* End */
}