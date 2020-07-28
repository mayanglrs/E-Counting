<?php
/**
 * 
 */
class User extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}


	function index() {

		$this->load->view('user/pemilih');
	}
	function memilih() {
		$data["data_calon"] = $this->M_user->getData();
		if(!empty($this->M_user->getData())) {
			$this->session->set_flashdata('success','Kamu siap untuk memilih!');
			$this->load->view('user/memilih',$data);
			
			
		}else{
			
			$this->session->set_flashdata('error','Klik button <b>Publish</b> untuk mempublish data pemilihan dulu! ');
			$this->load->view('user/selesai');
		}
		
	}

	function proses($id){
		$id_sess = $this->session->userdata('sess_id');

		$dpt = $this->db->query('SELECT dpt_pm FROM tbl_pemilihan where id_pm ="'.$id_sess.'"')->row_array();
		$pilihan = $this->db->query('SELECT count(id_pemilihan) as jumlah from pilihan where id_pemilihan ="'.$id_sess.'" group by id_pemilihan')->row_array();

		// echo '<pre>';
		// 	var_dump($pilihan['jumlah'],$dpt['dpt_pm']);
		// echo '</pre>';
		// die();

		if($pilihan['jumlah'] < $dpt['dpt_pm']) {
			$this->M_user->insert_pilihan($id);
			$this->session->set_flashdata('success','Kamu sudah memilih!');
			redirect('user/selesai');
		}else{
			$this->session->set_flashdata('error','Pemilihan sudah mencapai jumlah DPT!');
			redirect('user/selesai');
		}
	}
	
	function selesai() {
		$this->load->view('user/selesai');
	}
	function pemilih() {
		$this->load->view('user/pemilih');
	}
}

?>