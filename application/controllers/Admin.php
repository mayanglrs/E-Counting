<?php
	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("Admin_model");
			$this->load->library('session');
		}

		function index(){
		if ($this->session->has_userdata('user_id')) {

        	$this->load->view("admin/home");         

	    } else {

	       $this->load->view("login_admin");     

			}
	    }
	    function contact(){
		if ($this->session->has_userdata('user_id')) {

        	$this->load->view("admin/contact_me");         

	    } else {

	       $this->load->view("login_admin");     

			}
	    }
	    function admin_login(){
	    	$this->proses_login();
			redirect('login_admin');
	    }

	 //    function DataGrafik() {
		// if ($this->session->has_userdata('user_id')) {

		// 	$data['grafik']=$this->Admin_model->getHasil();
		// 	$this->load->view('admin/grafik', $data);       

	 //    } else {
			
		// 	$this->load->view("login_admin");
		// 	}
		// }

		function grafik() {
			$id = $this->session->userdata('user_id');
			$id_sess = $this->session->userdata('sess_id');

		if ($this->session->has_userdata('user_id')) {
			$data['data_pm'] = $this->db->get_where('tbl_pemilihan',['id_user' => $id])->result_array();
			
			$this->load->view('admin/grafik', $data);   
	    } else {
			
			$this->load->view("login_admin");
			}
		}

		function detGrafik($id){
			$id_sess = $this->session->userdata('user_id');

		if ($id_sess) {
			$data['grafik']=$this->Admin_model->getHasil($id);
			$this->load->view('admin/detail_grafik', $data);  
		}else {
			
			$this->load->view("login_admin");
			}
		}

		function register() {
			$data['data_kota'] = $this->Admin_model->getKota();
			$this->load->view('register.php', $data);
		}
		// function register() {
		// 	$data['data_kota'] = $this->Admin_model->getKota();
		// 	$this->load->view('reg.php', $data);
		// }

		 function proses_register(){
			// validation form
		 	$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		 	$this->form_validation->set_rules('email','E-mail','required|valid_email');
		 	$this->form_validation->set_rules('no_tps','No TPS','required');
		 	$this->form_validation->set_rules('desa','Desa/Kelurahan','required');
		 	$this->form_validation->set_rules('kota','Kota/Kabupaten','required');
		 	$this->form_validation->set_rules('password','Password','required|min_length[5]|matches[confirm_password]');
		 	$this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[5]|matches[password]');

		 	$this->cek_double();

		 	if($this->form_validation->run() == FALSE){
		 		$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
		 		redirect('admin/register');
		 	}else{
			 		$this->Admin_model->register();
			        $this->session->set_flashdata('sukses','Berhasil Register!');
		 		 	redirect('admin/login');
		 	}
		}

		function cek_double(){
		 		$cek_tps = $this->input->post('no_tps');
		 		$cek_desa = $this->input->post('desa');
		 		$cek_kota = $this->input->post('kota');

		 		$this->db->select('no_tps,desa,kota');
		 		$this->db->from('tbl_admin');
		 		$this->db->where('no_tps',$cek_tps);
		 		$this->db->where('desa',$cek_desa);
		 		$this->db->where('kota',$cek_kota);
		 		$query = $this->db->get();

		 		$num = $query->num_rows();
		 			if($num > 0){
		 				$this->session->set_flashdata('error','Lokasi sudah diinputkan!');
		 				redirect('admin/register','refresh');
		 			}else{
		 				return TRUE;
		 			}
		 	}

		function login() {
			$this->load->view('login_admin.php');
		}
		function aw() {
			$this->load->view('admin/aw');
		}

		function proses_login(){
			
			if($this->Admin_model->logged_id()){
			//jika session sdh terdaftar, langsung ke dashboard
			redirect("admin");

			}else{

			//jika session blm terdaftar

			//set form validation
			$this->form_validation->set_rules('email', 'E-mail','required|valid_email');
			$this->form_validation->set_rules('password', 'Password','required');

			//set message form validation
	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

			 		//jika benar
					if ($this->form_validation->run() == TRUE) {

			 		//get data dari form
			 		$email = $this->input->post("email", TRUE
			 	);
					$password =  $this->input->post("password", TRUE);
					$encpass = sha1(md5($email).md5($password));

					$con['email'] = $email;

					// echo '<pre>';
					//  var_dump($password);
					// echo '<pre>';
					// 	die();

					$checkLogin = $this->Admin_model->get_member_by_email($email); 
					// echo '<pre>';
					//  var_dump(password_verify($password,$checkLogin['password']));
					// echo '<pre>';
					// 	die();

					if($checkLogin != FALSE){
						 if ($encpass == ($checkLogin->password)) {
						         $this->session->set_userdata( array(
			                        'user_id'     => $checkLogin->id,
			                        'user_nama'   => $checkLogin->nama_lengkap,
			                        'user_email'   => $checkLogin->email,
			                        'user_tps'   => $checkLogin->no_tps,
			                        'user_desa'   => $checkLogin->desa,
			                        'user_kota'   => $checkLogin->kota,
			                        'user_pass' => $checkLogin->password,
			                        'user_foto' => $checkLogin->foto,
			                        'user_logged_in' => TRUE
			                    ));
			                    
						         	$this->session->set_flashdata('success','Selamat datang Admin!');
						         	redirect('admin');
						     	
						    } else {
						        $this->session->set_flashdata('message', 'Password Salah!');          
			        			redirect('admin');
						    }
					}else{
						$this->session->set_flashdata('message', 'Username tidak ditemukan');          
			        	redirect('admin');
			        }
			    }
		}
	}

	function data_user($id){
		if ($this->session->has_userdata('user_id')) {

			$data['data_admin'] = $this->Admin_model->get_member_by_id($this->session->userdata('user_id'));
			$data['data_kota'] = $this->Admin_model->getKota();
			$data['kota'] = $this->Admin_model->selectedKota();
			$this->load->view('admin/data_user',$data);    
			$this->load->view('layouts/sidebar',$data);       

	    } else {

			$this->load->view("login_admin");
		}
	}
	function edit_profil($id){
		if ($this->session->has_userdata('user_id')) {

			$data['data_admin'] = $this->Admin_model->get_member_by_id($this->session->userdata('user_id'));
			$data['data_kota'] = $this->Admin_model->getKota();
			$data['kota'] = $this->Admin_model->selectedKota();
			$this->load->view('admin/edit_profil',$data);     

	    } else {
	    	$this->session->set_flashdata('end','Oops Login dulu ya!');
			$this->load->view("login_admin");
		}
	}
	function update_profil($id) {
		$cek = $this->db->query("SELECT * FROM tbl_admin where email='".$this->input->post('email')."'")->num_rows();

		if ($cek<=0){
			$email =$this->input->post('email');
			$pass = $this->input->post('password');
			$encpass = sha1(md5($email).md5($pass));

			
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size'] 	 = '2048';
			$config['upload_path']	 = './assets/img/';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				$this->session->set_flashdata('danger','Data Gagal Diubah!');
				redirect('admin/edit_profil');
			 } 
			else {
				$upload = $this->upload->data();
				$image_name = $upload['file_name'];
				$data = array(
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'email' => $this->input->post('email'),
					'no_tps' => $this->input->post('no_tps'),
					'desa' => $this->input->post('desa'),
					'kota' => $this->input->post('kota'),
					'password' => $encpass,
					'foto' => $image
				);
				$this->db->where('id', $id);
				$this->db->update('tbl_admin', $calon);
				$this->session->set_flashdata('success','Data Berhasil Diubah!');
				redirect('admin/data_user');
			}
		}
	}
	function forgot_pass() {
		if ($this->session->has_userdata('user_id')) {

        	$this->load->view('forgot_pass');       

	    } else {
			
			$this->load->view("login_admin");
		}
	}
	function confirm_pass() {
		if ($this->session->has_userdata('user_id')) {

			$this->load->view('reset_pass');        

	    } else {

			$this->load->view("login_admin");
		}
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

}

	
?>