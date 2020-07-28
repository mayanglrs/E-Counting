<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilihan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pemilihan');
		$this->load->library('form_validation');
    $this->load->helper('url','html','form');
	}

	//mengirimkan data lewat controller
	function index(){
		if ($this->session->has_userdata('user_id')) {

        	$data["data_pemilihan"] = $this->m_pemilihan->getAll();
			$this->load->view('admin/pemilihan/tampil', $data);        

	    } else {
		
			$this->load->view("login_admin"); 
		}
	}

	//mengirimkan data dari db ke view
	function tambah(){
		if ($this->session->has_userdata('user_id')) {
			$data['data_kota'] = $this->m_pemilihan->getKota();
			$data['kota'] = $this->m_pemilihan->selectedKota();
			$data['data_admin'] = $this->m_pemilihan->get_member_by_id();
			$this->load->view('admin/pemilihan/create',$data);     

	    } else {
        	    
			$this->load->view("login_admin"); 
	    }
	}

	//insert data
		

	
		function input_pemilihan() {

			$this->form_validation->set_rules('jenis_pm', 'Jenis Pemilihan', 'required');	
			$this->form_validation->set_rules('desk_pm', 'Deskripsi', 'required');	
			$this->form_validation->set_rules('tanggal_pm', 'Tanggal', 'required');
			$this->form_validation->set_rules('lokasi_pm', 'Lokasi', 'required');
			$this->form_validation->set_rules('tps_pm', 'No TPS', 'required');
			$this->form_validation->set_rules('desa_pm', 'Desa/Kelurahan', 'required');
			$this->form_validation->set_rules('dpt_pm', 'Jumah DPT', 'required');
			$pemilihan['data_pemilihan'] = $this->db->get('tbl_pemilihan');

			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('pemilihan/tambah');
			}
			else {
				$this->m_pemilihan->insert_pemilihan();
				$this->session->set_flashdata('success','Data Berhasil Disimpan!');
				redirect('pemilihan');
			}
		}

		

	
		function pemilihan() {
			if ($this->session->has_userdata('user_id')) {

			$pemilihan['data_pemilihan'] = $this->db->get('tbl_pemilihan');
			$this->load->view('admin/pemilihan/tampil', $pemilihan);
			$this->load->view('admin/pemilihan/detail_pemilihan', $pemilihan);     

	    } else {


			$this->load->view("login_admin");
			}
		}
		function edit_pemilihan($id) {
			if ($this->session->has_userdata('user_id')) {

			$edit_pemilihan['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$this->load->view('admin/pemilihan/ubah_pemilihan', $edit_pemilihan);         

	    } else {
	    	$this->load->view("login_admin"); 
			}
		}

		function detail_pemilihan($id) {
			$id_user = $this->session->userdata('user_id');
			if ($this->session->has_userdata('user_id')) {

			$tampil['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$tampil['data_calon'] = $this->db->get_where('calon', ['id_pm' => $id]);
			// $tampil['data_calon'] = $this->db->get('calon');
			$tampil['data_pemilih'] = $this->db->get_where('pendaftaran', ['id_user' => $id_user]);
			$tampil['grafik'] = $this->m_pemilihan->getHasil($id);
			$tampil['jum1'] = $this->m_pemilihan->jumCalon($id);
			$tampil['jum2'] = $this->m_pemilihan->jumPemilih($id);
			$tampil['jum3'] = $this->m_pemilihan->jumCoblos($id);
			$this->load->view('admin/pemilihan/detail_pemilihan', $tampil);        

	    } else {

			$this->load->view("login_admin");
			}
		}


		function update_pemilihan($id) {
			$pemilihan = [
				'jenis_pm' => $this->input->post('jenis_pm'),
				'desk_pm' => $this->input->post('desk_pm'),
				'tanggal_pm' => $this->input->post('tanggal_pm'),
				'lokasi_pm' => $this->input->post('lokasi_pm'),
				'tps_pm' => $this->input->post('tps_pm'),
				'desa_pm' => $this->input->post('desa_pm'),
				'dpt_pm' => $this->input->post('dpt_pm')
			];
			$this->db->where('id_pm', $id);
			$this->db->update('tbl_pemilihan', $pemilihan);
			redirect('pemilihan');
		}

		function hapus_pemilihan($id) {
			$this->db->where("id_pm", $id);
			$this->db->delete("tbl_pemilihan");
			redirect('pemilihan');
		}

		function publish($id) {
			$cek = $this->m_pemilihan->getById($id); 
			$data = [
				'status' => 1
			];
			$this->db->where('id_pm', $id);
			$this->db->update('tbl_pemilihan', $data);
			$this->session->set_userdata( array('sess_id'     => $cek->id_pm));

			$this->db->where('id_pm', $id);
			$this->db->update('calon', $data);

			$this->session->set_flashdata('success','Data Berhasil Dipublish!');
			redirect('pemilihan');
		}

		function get_dataPilihan() {
			if ($this->session->has_userdata('user_id')) {

			$this->load->view('pilihan', $tampil);        

	    } else {
			

			$this->load->view("login_admin");
			}
			
		}

		function undangan($id) {
			if ($this->session->has_userdata('user_id')) {

        	$tampil['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$this->load->view('admin/pemilihan/undangan/undangan', $tampil);         

	    } else {
			

			$this->load->view("login_admin");
			}
		}


		function buat_undangan($id) {
			if ($this->session->has_userdata('user_id')) {

        	$tampil['data_pemilih'] = $this->m_pemilihan->getPemilih();
			$tampil['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$tampil['data_petugas'] = $this->m_pemilihan->getPetugas();
			$this->load->view('admin/pemilihan/undangan/buat_und', $tampil);         

	    } else {
			

			$this->load->view("login_admin");
			}
		}
		function sub_undangan($id) {
			if ($this->session->has_userdata('user_id')) {

        	$tampil['data_pemilih'] = $this->m_pemilihan->getPemilih();
			$tampil['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$tampil['data_petugas'] = $this->m_pemilihan->getPetugas();
			$this->load->view('admin/pemilihan/undangan/sub_und',$tampil);       

	    } else {
			

			$this->load->view("login_admin");
			}
		}

		function cetak_undangan($id) {
			// echo '<pre>';
			// 	var_dump($this->input->post()['nama']);
			// echo '</pre>';
			// die();

			$undangan['data_pemilih'] = $this->db->get_where('pendaftaran',['id' => $id])->row_array();
			$undangan['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$jenis = $this->input->post('jenis_pm');
			$undangan['pemilihan'] = $this->db->get_where('tbl_pemilihan',['jenis_pm' => $jenis])->row_array();
			$undangan['petugas'] = $this->input->post();

			$this->load->view('admin/pemilihan/buat_undangan', $undangan);
    
		}

		function pesan($id) {
			if ($this->session->has_userdata('user_id')) {

			$data['data_pemilihan'] = $this->db->get_where('tbl_pemilihan', ['id_pm' => $id])->row_array();
			$data['data_no'] = $this->m_pemilihan->getNo();
			$this->load->view('admin/pemilihan/pesan/tampil_pesan',$data);       

	    } else {
			

			$this->load->view("login_admin");
			}
		}
		
		function sendmsg($id) {
			if ($this->session->has_userdata('user_id')) {

			$this->form_validation->set_rules('msisdn','No Telepon','required');
			$this->form_validation->set_rules('content','No Telepon','required');
			if($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('pesan/detail');
			}
			else {
				$this->m_pemilih->proses_pesan($id);
				$this->session->set_flashdata('success','Data Berhasil Dikirim!');
				redirect('pesan/detail');
			}
	    } else {
			

			$this->load->view("login_admin");
			}
		}
}
