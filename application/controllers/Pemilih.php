<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pemilih');
		$this->load->library('form_validation');
	}

	//mengirimkan data lewat controller
	function index(){
		if ($this->session->has_userdata('user_id')) {

        	$data_pemilih["data_pemilih"] = $this->m_pemilih->getAll();
			$this->load->vars($data_pemilih);
			$this->load->view('admin/pemilih/tampil_pemilih');      

	    } else {
        	    
			$this->load->view("login_admin"); 
	    }
	}


	//mengirimkan data dari db ke view
	function tambah(){
		if ($this->session->has_userdata('user_id')) {

			$this->load->view('admin/pemilih/create');     

	    } else {
        	    
			$this->load->view("login_admin"); 
	    }
	}

	//insert data
	function input_user() {

			$this->form_validation->set_rules('nik', 'NIK', 'required|min_length[16]|max_length[16]');
			$this->form_validation->set_rules('nama', 'Nama', 'required');	
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_tlp', 'No Telepon', 'required|regex_match[/^[0-9]{12}$/]');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');

			$this->cek_nik();
			$this->cek_no();

			if($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('pemilih');
			}
			else {
				$this->m_pemilih->insert_user();
				$this->session->set_flashdata('success','Data Berhasil Disimpan!');
				redirect('pemilih');
			}
		}

	function cek_nik(){
		 		$cek_nik = $this->input->post('nik');

		 		$this->db->select('nik');
		 		$this->db->from('pendaftaran');
		 		$this->db->where('nik',$cek_nik);
		 		$query = $this->db->get();

		 		$num = $query->num_rows();
		 			if($num > 0){
		 				$this->session->set_flashdata('error','NIK yang diinput kan sudah terdaftar!');
		 				redirect('pemilih','refresh');
		 			}else{
		 				return TRUE;
		 			}
		 	}

	function cek_no(){
		 		$cek_no = $this->input->post('no_tlp');

		 		$this->db->select('no_tlp');
		 		$this->db->from('pendaftaran');
		 		$this->db->where('no_tlp',$cek_no);
		 		$query = $this->db->get();

		 		$num = $query->num_rows();
		 			if($num > 0){
		 				$this->session->set_flashdata('error','Nomor yang diinput kan sudah terdaftar!');
		 				redirect('pemilih','refresh');
		 			}else{
		 				return TRUE;
		 			}
		 	}

	function pemilih() {
		if ($this->session->has_userdata('user_id')) {

        	$pemilih['data_pemilih'] = $this->db->get('pendaftaran');
			$this->load->view('admin/pemilih/tampil_pemilih', $pemilih);       

	    } else {
	    	$this->load->view("login_admin"); 
			
			}
		}

		function edit_pemilih($id) {
			if ($this->session->has_userdata('user_id')) {

        	
			$edit_pemilih['data_pemilih'] = $this->db->get_where('pendaftaran', ['id' => $id])->row_array();

			$this->load->view('admin/pemilih/ubah_pemilih', $edit_pemilih);       

	    } else {
	    	$this->load->view("login_admin"); 
			}
		}

		function update_pemilih($id) {
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size'] 	 = '2048';
			$config['upload_path']	 = './assets/img/';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				$this->session->set_flashdata('danger','Data Gagal Diubah!');
			 } 
			else {
				$upload = $this->upload->data();
				$image_name = $upload['file_name'];
				$data = [
					'nama' => $this->input->post('nama'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'alamat' => $this->input->post('alamat'),
					'agama' => $this->input->post('agama'),
					'foto' => $image_name
				];
				$this->db->where('id', $id);
				$this->db->update('pendaftaran', $data);
				$this->session->set_flashdata('success','Data Berhasil Diubah!');
				redirect('pemilih');
			}
		}
		

		function hapus_pemilih($id) {
			$this->db->where("id", $id);
			$this->db->delete("pendaftaran");
			$this->session->set_flashdata('success','Data Berhasil Dihapus!');
			redirect('pemilih');
		}
		
		
}
