<?php

class M_pemilih extends CI_Model
{
	function getAll(){
		$id = $this->session->userdata("user_id");

		$query = $this->db->query("SELECT * FROM pendaftaran where id_user='".$id."'")->result(); 
		return $query;
	}

	function getById($id){
		$query = $this->db->get_where('pendaftaran',["id" => $id])->row();
		return $query;
	}

	function insert_user() {
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] 	 = '2048';
		$config['upload_path']	 = './assets/img/';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			echo 'gagal';
		 } 
		else {
			$id = $this->session->userdata('user_id');
			$upload = $this->upload->data();
			$image_name = $upload['file_name'];
			$data = [
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'no_tlp' => $this->input->post('no_tlp'),
				'agama' => $this->input->post('agama'),
				'foto' => $image_name,
				'id_user' => $id,
				'status' => $this->input->post('status')
			];
			$this->db->insert('pendaftaran', $data);
		}
	}

		function undangan($id) {

			$undangan['data_undangan'] = $this->db->get_where('pendaftaran',['nik' => $id])->row_array();
			$undangan['pemilih'] = $this->db->get('tbl_pemilihan');
			$this->load->view('admin/undangan/undangan', $undangan);
		}

		function sub_undangan(){
			$jenis = $this->input->post('jenis_pemilihan');
			$data = $this->db->get_where('tbl_pemilihan', array('jenis_pm' => $jenis))->result();
			echo json_encode($data);
		}

		function cetak_undangan($id) {

			$undangan['data_undangan'] = $this->db->get_where('pendaftaran',['id' => $id])->row_array();
			$jenis = $this->input->post('jenis_pm');
			$undangan['pemilihan'] = $this->db->get_where('tbl_pemilihan',['jenis_pm' => $jenis])->row_array();
			$this->load->view('admin/undangan/buat_undangan', $undangan);
		}

}