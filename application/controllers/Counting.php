<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Counting extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}

	//mengirimkan data lewat controller
	function index(){
		if ($this->session->has_userdata('user_id')) {
			$this->load->view('admin/counting/tampil_counting');     

	    } else {
	    	$this->load->view("login_admin"); 
		}
	}

	//menghitung
	function hitung(){
		if ($this->session->has_userdata('user_id')) {
			$this->form_validation->set_rules('kode', 'kode', 'required');

			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed','Masukkan scan barcode!');
				redirect('counting');
			}else {
				$cek = $this->db->query("SELECT * FROM calon where rand='".$this->input->post('kode')."'")->num_rows();
				$cek_pm = $this->db->query("SELECT * FROM tbl_pemilihan where status='1' ")->row_array();
        
			        if($cek < 0){
			        	$this->session->set_flashdata('salah','Barcode yang dimasukkan tidak valid!');
			        	redirect('counting');
			        }else{
			        	for ($counter = 0; $counter <= $cek_pm['dpt_pm'] ; $counter++)
  						{
  							echo $counter;
  							$data=array('counter' => $counter);
			            	$this->load->view('admin/counting/tampil_counting',$data);	  
  						}
			        		
			            // $counter++;
			            //  // echo '<pre>';
			            //  //    var_dump($counter);
			            //  //  echo '</pre>';
			            //  //   die();
			            // return $counter;

			            
			        }
			}			
						

	    } else {
	    	$this->load->view("login_admin"); 
		}
	}

}
