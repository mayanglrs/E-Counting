<?php

class M_petugas extends CI_Model
{
	function getAll(){
		$id = $this->session->userdata("user_id");

		$query = $this->db->query("SELECT * FROM petugas where id_user='".$id."'")->result(); 
		return $query;
	}

	function getById($id){
		$query = $this->db->get_where('petugas',["id_petugas" => $id])->row();
		return $query;
	}

	public function insert_petugas(){
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
			$petugas = [
				'nama_petugas' => $this->input->post('nama_petugas'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'job' => $this->input->post('job'),
				'foto' => $image_name,
				'id_user' => $id
			];
			// echo '<pre>';
			// var_dump($petugas);
			// echo '<pre>';
			// die();
			$this->db->insert('petugas', $petugas);
		}
	}


}