<?php

class M_calon extends CI_Model
{
	function getAll(){
		// $this->db->select('*');
		// $this->db->from('tbl_admin');
		// $query = $this->db->get();
		
		$id = $this->session->userdata("user_id");

		$query = $this->db->query("SELECT * FROM calon where id_user='".$id."'")->result(); 
		return $query;
			// echo '<pre>';
			//   var_dump($query);
			//  echo '</pre>';
			//  die();	
		 
	}

	function getById($id){
		$query = $this->db->get_where('calon',["id" => $id])->row();
		return $query;
	}

	public function getPemilihan(){
		$id = $this->session->userdata('user_id');
			$this->db->select('id_pm, jenis_pm');
			$this->db->from('tbl_pemilihan');
			$this->db->where('id_user',$id);
			$query = $this->db->get();
			return $query->result();
	}

	public function insert_calon() {
		$no = $this->input->post('no_urut');

		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] 	 = '2048';
		$config['upload_path']	 = './assets/img/';

		$this->load->library('upload', $config);

		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
		$config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/img/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $img_name=$no.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $no; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$img_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		if (!$this->upload->do_upload('foto')) {
			echo 'gagal';
		 } 
		else {
			$this->load->helper('string');

			$id = $this->session->userdata('user_id');
			$upload = $this->upload->data();
			$image_name = $upload['file_name'];
			$calon = [
				'no_urut' => $this->input->post('no_urut'),
				'sbg_calon' => $this->input->post('sbg_calon'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'foto' => $image_name,
				'id_user' => $id,
				'id_pm' => $this->input->post('pm'),
				'qrcode' => $img_name,
				'rand' => random_string('numeric', 10)

			];
			$this->db->insert('calon', $calon);
		}
	}

}