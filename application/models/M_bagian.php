<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bagian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function ambil_by_id($id)
    {
        return $this->db->get_where('bagian', ["bagian_id" => $id])->row();
    }

    public function ambil_semua($limit, $start)
	{
		$this->db->from('bagian')->limit($limit, $start);

		$this->db->order_by('bagian_id','desc');

		$query = $this->db->get();

		return $query->result();
    }

    public function ambil_semua_bagian()
    {
        $query = $this->db->get('bagian');

        return $query->result();
    }

	public function hitung_semua()
	{
      return $this->db->count_all_results('bagian');
    }

	public function tambah()
	{
    	$data  = array (
			'bagian_id'		=> NULL,
			'nama'			=> $this->input->post("nama", true),
            // {f} ditambahkan true, untuk menghindari SQL Injection
            'date_added'    => date('Y-m-d H-i:s', true),
			// {c} 'user_id=> $this->session->userdata('username'),
      	);

       $this->db->insert('bagian', $data);
    }

    public function ubah($id)
    {
    	$data  = array (
			'nama'  	=>  $this->input->post("nama"),
		);

        $this->db->where('bagian_id', $id);
        $this->db->update('bagian', $data);

    }

    public function hapus($id)
    {	
    	if ($this->session->userdata('role') == 'root') {
        	return $this->db->delete('bagian', array("bagian_id" => $id));
    	}
    }
}