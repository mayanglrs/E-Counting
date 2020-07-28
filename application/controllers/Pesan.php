<?php
/**
 * 
 */
class Pesan extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model("m_pemilihan");
			$this->load->helper('url','html','form');
		}

	function detail($id){
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
				redirect('pesan/detail/'.$id);
			}
			else {
				$this->m_pemilihan->proses_pesan($id);
				$this->session->set_flashdata('success','Data Berhasil Dikirim!');
				redirect('pesan/detail/'.$id);
			}
	    } else {
			

			$this->load->view("login_admin");
			}
		}

	
}