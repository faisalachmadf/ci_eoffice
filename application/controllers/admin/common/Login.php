<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // {c} Cek Sesi Login
        if ($this->session->userdata('is_logged') != '')
		redirect(base_url().'admin/common/dashboard');

        $this->load->database();
        $this->load->library('encrypt');
        $this->load->library('session');
        // {c} Load Template Admin
        // {c} $this->load->library('template_admin');
        $this->load->model('m_user');
        $this->load->helper('url');
    }

	public function index()
	{
		$data = array();
		
		$this->load->view('admin/common/v_login', $data);
	}

	public function auth()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
            $username = $this->input->post("username", TRUE);
            $password = MD5($this->input->post('password', TRUE));

            // {c} cek data via model
            $is_logged = $this->m_user->login('user', array('username' => $username), array('password' => $password), array('status' => 1));

            // {c} jika ditemukan, maka buat session
            if ($is_logged != FALSE)
            {
                foreach ($is_logged as $logged)
                {
                    $session_data = array(
                        'user_id'   	=> $logged->user_id,
                        'nama'  		=> $logged->nama,
                        // {F} penambahan
                        'jabatan'		=> $logged->jabatan,
                        'email'			=> $logged->email,
                        'username'  	=> $logged->username,
                        'role'  		=> $logged->role,
                        'bagian_id'  	=> $logged->bagian_id,
                        'subbagian_id'  => $logged->subbagian_id,
                        'status'  		=> $logged->status,
                        // {c} Sesi ID Unik
                        'is_logged'		=> uniqid(rand()),
                    );
                    // {c} set session userdata
                    $this->session->set_userdata($session_data);

                    redirect(base_url() . 'admin/common/dashboard');
                }
            }
			else{
		        redirect(base_url() . 'admin/common/login');
		    }
		}
		else{
	        redirect(base_url() . 'admin/common/login');
	    }
		
	}

	/*
	{c}

	public function auth()
	{
		if(isset($_POST['submit'])){

			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$is_logged = $this->m_user->login($username,$password);

			if($is_logged == 1){
				$this->session->set_userdata(array('status_login'=>'sukses'));

				redirect('admin/common/dashboard');
			}
			else{
		        redirect('admin/common/login');
		    }
		}
		else {
			$this->load->view('admin/common/v_login');
		}
	}
	*/

	/*
	{c} 

	public function auth(){
		$this->load->library('form_validation');
		$this->load->helper('form');

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
      		if($this->input->post()){
				$username = $this->input->post('username',TRUE);

			 	$password = $this->input->post('password',TRUE);
				// ngecek username dan password ke models
				// File: models/m_user.php - cari : cek_username dan cek_password
				$cek_username = $this->m_user->cek_username($username);

				$password_db = $this->m_user->cek_password($username);

				if($cek_username>0){
					foreach ($password_db as $row){
						if($password == $row->password){
								$datauser = array(
								'username'		=> $username,
								'user_id' 		=> $row->user_id,
								'role' 		    => $row->role,
								'bagian' 		=> $row->bagian_id,
							);

							// Simpan Data Session
							$this->session->set_flashdata($datauser);

							// Username dan Password BENAR makan di alihkan ke 'admin/home'
							redirect(base_url().'admin/common/dashboard');
						}	else{
								// Username BENAR TAPI Password SALAH maka di alihkan ke 'admin/login'
								redirect(base_url().'admin/common/login');
							}
					}
				}	else{
						// Password BENAR TAPI username SALAH maka di alihkan ke 'admin/login'
						redirect(base_url().'admin/common/login');
					}
			}
		}	else{
			// Username dan Password SALAH makan di alihkan ke 'admin/login'
			redirect(base_url().'admin/common/login');
		}
	}
	*/
}