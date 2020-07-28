<?php

class M_c1 extends CI_Model
{
	function getAll(){
		$id = $this->session->userdata("user_id");

		$query = $this->db->query("SELECT * FROM tbl_pemilihan where id_user='".$id."'")->result(); 
		return $query;
	}

	function getById($id){
		$query = $this->db->get_where('tbl_pemilihan',["id_pm" => $id])->row();
		
		return $query;
	}
	function get_member_by_id(){
		$id = $this->session->userdata('user_id');
    	return $this->db->get_where('tbl_admin', array('id' => $id))->row();
    }
    public function getKota(){

			$this->db->select('id_kota, nama');
			$this->db->from('sandi_kota');
			$query = $this->db->get();
			return $query->result();
	}
	public function kotaw(){
		$id = $this->session->userdata('user_id');
		$this->db->select('kota')->from('tbl_admin')->where('id',$id);
		$id_kota = $this->db->get(); 

	    if ($id_kota->num_rows() > 0) {
	         return $id_kota->row()->kota;
	     }
	    return false;
	}
	public function selectedKota(){
		$id_kota = $this->kotaw();
		$this->db->select('nama')->from('sandi_kota')->where('id_kota',$id_kota);
		$kota = $this->db->get(); 


	    if ($kota->num_rows() > 0) {
	        return $kota->row_array();
	 //         echo '<pre>';
		// 	var_dump($id_kota,$kota);
		// echo '</pre>';
		// die();

	     }
	    return false;
		// echo '<pre>';
		// 	var_dump($id_kota,$kota);
		// echo '</pre>';
		// die();
	}
   
	public function getHasil($id){
        $query = $this->db->query("SELECT pilihan,count(id_calon) AS jumlah FROM pilihan where id_pemilihan='".$id."' group by pilihan");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	public function insert_pemilihan(){
		$id = $this->session->userdata('user_id');
		$pemilihan = [
			'jenis_pm' => $this->input->post('jenis_pm'),
			'desk_pm' => $this->input->post('desk_pm'),
			'tanggal_pm' => $this->input->post('tanggal_pm'),
			'lokasi_pm' => $this->input->post('lokasi_pm'),
			'tps_pm' => $this->input->post('tps_pm'),
			'desa_pm' => $this->input->post('desa_pm'),
			'dpt_pm' => $this->input->post('dpt_pm'),
			'id_user' => $id
		];
		$this->db->insert('tbl_pemilihan', $pemilihan);
	}

	function publish($id){
		$query = $this->db->query("update calon,tbl_pemilihan set calon.status='1',tbl_pemilihan.status='1' where calon.id_pm='".$id."' and tbl_pemilihan.id_pm ='".$id."'"); 
		// echo '<pre>';
		// 	  var_dump($query);
		// 	 echo '</pre>';
		// 	 die();	
		return $query;
	}


	function kirim($id){
		$get_id = $this->db->get_where('tbl_pemilihan',["id_pm" => $id])->row();
		$this->load->view('admin/pemilihan/detail_pemilihan/',$get_id);
	}

	
	public function getPemilih(){
			$id = $this->session->userdata('user_id');
			$this->db->select('id, nama');
			$this->db->from('pendaftaran');
			$this->db->where('id_user',$id);
			$query = $this->db->get();
			return $query->result();
	}
	public function getPetugas(){
			$id = $this->session->userdata('user_id');
			$this->db->select('id_petugas, nama_petugas');
			$this->db->from('petugas');
			$this->db->where('id_user',$id);
			$query = $this->db->get();
			return $query->result();
	}
	public function jumCalon($id){
		$id_user = $this->session->userdata('user_id');
		$pilihan = $this->db->query('SELECT count(id) as jumlah from calon where id_user ="'.$id_user.'" and id_pm ="'.$id.'" ')->row_array();
		return $pilihan;
		
	}
	public function jumPemilih($id){
		$id_user = $this->session->userdata('user_id');
		$pilihan = $this->db->query('SELECT count(id) as jumlah from pendaftaran where id_user ="'.$id_user.'" ')->row_array();
		return $pilihan;
		
	}
	public function jumCoblos($id){
		$id_user = $this->session->userdata('user_id');
		$pilihan = $this->db->query('SELECT count(id_pilihan) as jumlah from pilihan where id_pemilihan ="'.$id.'" ')->row_array();
		return $pilihan;
		
	}

}