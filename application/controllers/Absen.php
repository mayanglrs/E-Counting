<?php
/**
 * 
 */
class Absen extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model("Admin_model");
		}

	function index(){
		$data['absen'] = $this->Admin_model->getAbsen();
		$this->load->view('admin/absen/datang',$data);
	}

	function absen() {
		$nik = $this->input->post('nik');

		$cek = $this->db->get_where('pendaftaran', ['nik' => $nik])->row_array();
		$id = $this->session->userdata('user_id');
			if($cek) {
				$data = [
					'nik' => $nik,
					'nama' => $cek['nama'],
					'jenis_kelamin' => $cek['jenis_kelamin'],
					'tanggal' => date('Y-m-d'),
					'id_user' => $id
				];

			 	$this->db->insert('absen', $data);

			 	$absen['data_absen'] = $this->db->get('absen');
				redirect('absen/daftar');
			}
			else {
				$this->load->view('admin/absen/datang');
			}
	}

	function daftar() {
		$absen['data_absen'] = $this->Admin_model->DataAbsen();
		$this->load->view('admin/absen/daftar_absen', $absen);
	}
}