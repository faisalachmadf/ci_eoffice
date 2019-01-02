<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	private $_table = "user";

	public function __construct()
	{
		parent::__construct();
	}

	function login($_table, $username, $password, $status)
    {
        $this->db->select('*');
        $this->db->from($_table);
        $this->db->where($username);
        $this->db->where($password);
        $this->db->where($status);

        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return FALSE;
        }
        else {
            return $query->result();
        }
    }

	public function ambil_by_id($id)
    {
        return $this->db->get_where('user', ["user_id" => $id])->row();
    }

    public function ambil_semua($limit, $start)
	{
		
		$root = 'root';
		$admin = 'admin';

		// Role Root tidak ditampilkan
		$this->db->where('role !=', $root);

		$this->db->from('user');

		$this->db->limit($limit, $start);

		$this->db->order_by('user_id','desc');

		$query = $this->db->get();

		return $query->result();
    }

    public function ambil_semua_user()
    {
        $query = $this->db->get('user');

        return $query->result();
    }

	public function hitung_semua()
	{
      return $this->db->count_all_results('user');
    }

    public function hapus($id)
    {	
    	if ($this->session->userdata('role') == 'root') {
        	return $this->db->delete('user', array("user_id" => $id));
    	}
    }
}