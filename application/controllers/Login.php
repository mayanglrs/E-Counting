<?php

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
	}

	function _logged_in() {
		$this->db->get_where('petugas');
		$this->session->userdata('nama_petugas');
	}
	
	function index(){
		$this->_logged_in();
		$this->load->view('login');
	}

	function login() {
		$this->_logged_in();
		
		$nama = $this->input->post('nama_petugas');
		
		$cek = $this->db->get_where('petugas', ['nama_petugas' => $nama])->row_array();

		if($cek){
			if($nama == $cek['nama_petugas']) {
					$data_session = array('nama_petugas' => $nama, 'status' => "login");
					$this->session->set_userdata($data_session);
					redirect('admin');
				}
			else {
				redirect("login");
			}
		}
		else{
			echo "Nama Atau Password Salah!";
		}
	}

	function go_login() {
		$this->_logged_in();

		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}		
		else {
			$this->login();
		}
	}

	function pilihan() {
		$calon['data_calon'] = $this->db->get('calon');
		$pilihan['data_pilihan'] = $this->db->get('pilihan');
		$this->load->view('pilihan', $calon, $pilihan);
	}

	function logout()
	{
		$this->session->unset_userdata('nama_petugas');
		redirect('login');
	}
}