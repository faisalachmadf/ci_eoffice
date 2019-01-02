<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template_admin {
	protected $_ci;
	function __construct(){
		$this->_ci =&get_instance();
	}

	function display($template,$data=null){

		$data['_content']	= $this->_ci->load->view($template,$data,true);

		$data['_header']	= $this->_ci->load->view('admin/template/t_header',$data,true);

		$data['_footer']	= $this->_ci->load->view('admin/template/t_footer',$data,true);

		$data['_menu']	= $this->_ci->load->view('admin/template/t_menu',$data,true);

		$data['_navigasi']	= $this->_ci->load->view('admin/template/t_navigasi',$data,true);

		$data['_js']	= $this->_ci->load->view('admin/template/t_js',$data,true);

		$this->_ci->load->view('admin/template/t_template.php',$data);
	}
}	
