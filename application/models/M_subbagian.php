<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subbagian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function ambil_by_id($id)
    {
        return $this->db->get_where('subbagian', ["subbagian_id" => $id])->row();
    }

    public function ambil_semua($limit, $start)
	{
		$this->db->from('subbagian')->limit($limit, $start);

		$this->db->order_by('subbagian_id','desc');

		$data = $this->db->get();

		return $data->result();
    }

	public function hitung_semua()
	{
      return $this->db->count_all_results('subbagian');
    }

	public function tambah()
	{
    	$data  = array(
			'subbagian_id'	=> NULL,
			'bagian_id'		=> $this->input->post("bagian_id", true),
            'nama'          => $this->input->post("nama", true),
            'date_added'    => date('Y-m-d H-i:s', true),
			// {c} 'user_id'		=> $this->session->userdata('username'),
      	);

       $this->db->insert('subbagian', $data);
    }

    public function ubah($id)
    {
    	$data  = array(
            'bagian_id' => $this->input->post("bagian_id"),
			'nama'  	=>  $this->input->post("nama"),
		);

        $this->db->where('subbagian_id', $id);
        $this->db->update('subbagian', $data);

    }

    public function hapus($id)
    {	
    	if ($this->session->userdata('role') == 'root') {
        	return $this->db->delete('subbagian', array("subbagian_id" => $id));
    	}
    }
}