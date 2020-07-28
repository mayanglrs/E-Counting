<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_petugas');
		$this->load->library('form_validation');
	}

	//mengirimkan data lewat controller
	function index(){
		if ($this->session->has_userdata('user_id')) {

        	$data["data_petugas"] = $this->m_petugas->getAll();
			$this->load->view('admin/petugas/tampil_petugas', $data);        

	    } else {
		
			$this->load->view("login_admin"); 
		}
	}


	//mengirimkan data dari db ke view
	function tambah(){
		if ($this->session->has_userdata('user_id')) {
        	$this->load->view('admin/petugas/create');
	    } else {
	    	$this->load->view("login_admin"); 
		}
	}

	//insert data

		function input_petugas() {

			$this->form_validation->set_rules('nama_petugas', 'Nama', 'required');	
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('job', 'Job', 'required');

			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				$this->session->set_flashdata('error','Isi data dulu!');
				redirect('petugas');
			}
			else {
				 $this->m_petugas->insert_petugas();

			// echo '<pre>';
			// var_dump($petugas);
			// echo '<pre>';
			// die();
				$this->session->set_flashdata('success','Data Berhasil Disimpan!');
				redirect('petugas');
			}

		}

	function petugas() {
		if ($this->session->has_userdata('user_id')) {

        	$petugas['data_petugas'] = $this->db->get('petugas');
			$this->load->view('admin/petugas/tampil_petugas', $petugas);       

	    } else {
	    	$this->load->view("login_admin"); 
			
			}
		}

		function edit_petugas($id) {
			if ($this->session->has_userdata('user_id')) {

			$edit_petugas['data_petugas'] = $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
			$this->load->view('admin/petugas/ubah_petugas', $edit_petugas);         

	    } else {
	    	$this->load->view("login_admin"); 
			}
		}

		function update_petugas($id) {
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
				$petugas = [
					'nama_petugas' => $this->input->post('nama_petugas'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'alamat' => $this->input->post('alamat'),
					'job' => $this->input->post('job'),
					'foto' => $image_name
				];
				$this->db->where('id_petugas', $id);
				$this->db->update('petugas', $petugas);
				$this->session->set_flashdata('success','Data Berhasil Diubah!');
				redirect('petugas');
			}
		}

		function hapus_petugas($id) {
			$this->db->where("id_petugas", $id);
			$this->db->delete("petugas");
			$this->session->set_flashdata('success','Data Berhasil Dihapus!');
			redirect('petugas');
		}

		
}
