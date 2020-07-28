<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_calon');
		$this->load->model('m_pemilihan');
		$this->load->library('form_validation');
	}

	//mengirimkan data lewat controller
	function index(){
		if ($this->session->has_userdata('user_id')) {

			$data_calon["data_calon"] = $this->m_calon->getAll();
			$data_calon["data_pm"] = $this->m_calon->getPemilihan();
			$this->load->vars($data_calon);
			$this->load->view('admin/calon/tampil_calon');     

	    } else {
	    	$this->load->view("login_admin"); 
		}
	}

	//mengirimkan data dari db ke view
	function tambah(){
		if ($this->session->has_userdata('user_id')) {
			$data["data_pm"] = $this->m_calon->getPemilihan();
        	$this->load->view('admin/calon/create',$data);
	    } else {
	    	$this->load->view("login_admin"); 
		}
	}

	//insert data
	function input_calon() {

			$this->form_validation->set_rules('no_urut', 'No Urut', 'required');	
			$this->form_validation->set_rules('sbg_calon', 'Calon', 'required');	
			$this->form_validation->set_rules('nama', 'Nama', 'required');	
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
		 	$this->form_validation->set_rules('pm','Pemilihan','required');

			$calon['data_calon'] = $this->db->get('calon');

			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('calon/tambah');
			}
			else {
				$this->m_calon->insert_calon();
				$this->session->set_flashdata('success','Data Berhasil Disimpan!');
				redirect('calon');
			}
			
		}

	function calon() {
			$calon['data_calon'] = $this->db->get('calon');
			$this->load->view('admin/calon/tampil_calon', $calon);
		}

		function edit_calon($id) {
			$edit_calon['data_calon'] = $this->db->get_where('calon', ['id' => $id])->row_array();

			$this->load->view('admin/calon/ubah_calon', $edit_calon);
		}

		function update_calon($id) {
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
				$calon = [
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'agama' => $this->input->post('agama'),
					'foto' => $image_name
				];
				$this->db->where('id', $id);
				$this->db->update('calon', $calon);
				$this->session->set_flashdata('success','Data Berhasil Diubah!');
				redirect('calon');
			}
		}

		function hapus_calon($id) {
			$this->db->where("id", $id);
			$this->db->delete("calon");
			$this->session->set_flashdata('success','Data Berhasil Dihapus!');
			redirect('calon');
		}
}
