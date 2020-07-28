<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C1 extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_c1');
		$this->load->library('form_validation');
	}

	//mengirimkan data lewat controller
	function index(){
		if ($this->session->has_userdata('user_id')) {

			$this->load->view('admin/c1/tampil_c1');        

	    } else {
		
			$this->load->view("login_admin"); 
		}
	}
		
}
