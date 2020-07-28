<?php

class Admin_model extends CI_Model {

	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
        return $this->session->userdata('user_nama');
        return $this->session->userdata('user_email');
        return $this->session->userdata('user_foto');
    }

    function get_id(){
        $query = $this->db->query("SELECT * from tbl_admin where id='.$this->session->userdata('user_id').'")->result();
        return $query;
    }

	public function register(){
		$cek = $this->db->query("SELECT * FROM tbl_admin where email='".$this->input->post('email')."'")->num_rows();
        $image = "home1.png";
		if ($cek<=0){
			$email =$this->input->post('email');
			$pass = $this->input->post('password');
			$encpass = sha1(md5($email).md5($pass));

			$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email'),
			'no_tps' => $this->input->post('no_tps'),
			'desa' => $this->input->post('desa'),

			'kota' => $this->input->post('kota'),
			'password' => $encpass,
            'foto' => $image
			);

			try{

					return  $this->db->insert('tbl_admin', $data);	
		 			echo '<script>alert("Register Berhasil!");</script>';
		 		 	redirect('admin/login','refresh');
		 		
		 		}catch(Exception $e){
			        $this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
		 			redirect('admin/register');
		 		}

		}else{
			echo '<script>alert("E-mail yang kamu masukkan sudah terdaftar!");</script>';
			redirect('admin/register','refresh');

		}


		
	}
    public function hitung(){
        $cek = $this->db->query("SELECT * FROM calon where rand='".$this->input->post('kode')."'")->num_rows();
        
        $counter = 0;
        if($cek > 0){
            $counter++;
             // echo '<pre>';
             //    var_dump($counter);
             //  echo '</pre>';
             //   die();
            $data['counter'] = $counter;
            $this->load->view('admin/counting/tampil_counting',$data);
        }
    }

    public function getHasil($id){
        $query = $this->db->query("SELECT id_pemilihan,pilihan,count(id_calon) AS jumlah FROM pilihan where id_pemilihan='".$id."' group by pilihan");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }

        // echo '<pre>';
        //         var_dump($query);
        //       echo '</pre>';
        //        die();

        // if($query->num_rows() > 0){
        //     foreach($query->result() as $data){
        //         $hasil[] = $data;
        //     }
        //     return $hasil;
        // }
    }
    public function getPm(){
        $id = $this->session->userdata('user_id');


        $id = $this->session->userdata('user_id');
        $this->db->select('id_pm')->from('tbl_pemilihan')->where('id_user',$id);
        $query = $this->db->get(); 

        if ($query->num_rows() > 0) {
               return $query->result();
              //  echo '<pre>';
              //   var_dump($query);
              // echo '</pre>';
              //  die();
         }
        return false;

   


            // $query = $this->db->query("SELECT * from tbl_pemilihan WHERE id_user = '$id' ");
            // return $query->result();
        }
     

	
	

	public function undangan(){
		$buat = [
				'jenis_pm' => $this->input->post('jenis_pm'),
				'desk_pm' => $this->input->post('desk_pm'),
				'tanggal_pm' => $this->input->post('tanggal_pm'),
				'lokasi_pm' => $this->input->post('lokasi_pm'),
				'tps_pm' => $this->input->post('tps_pm'),
				'desa_pm' => $this->input->post('desa_pm'),
				'dpt_pm' => $this->input->post('dpt_pm')
			];
			$this->db->insert('tbl_pemilihan', $buat);
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
        }
        return false;
    }

    public function getAbsen(){
            $id = $this->session->userdata('user_id');
            $this->db->select('nik, nama');
            $this->db->from('pendaftaran');
            $this->db->where('id_user',$id);
            $query = $this->db->get();
            return $query->result();
    }
    public function DataAbsen(){
            $id = $this->session->userdata('user_id');
            $this->db->select('nik, nama,jenis_kelamin,tanggal');
            $this->db->from('absen');
            $this->db->where('id_user',$id);
            $query = $this->db->get();
            return $query->result();
    }
    public function jumCoblos($id){
        $id_user = $this->session->userdata('user_id');
        $pilihan = $this->db->query('SELECT count(id_pilihan) as jumlah from pilihan where id_pemilihan ="'.$id.'" ')->row_array();
        return $pilihan;
        
    }

    //fungsi check login
    function cek_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    //fungsi check login
    function getRows($where = array())
    {
	    if (! empty($where))
	    {
	       $this->db->where($where);
	       $query = $this->db->get('tbl_admin');
	       if ($query->num_rows() > 0)
	       {
	          return $query->row_array();
	       } 
	     }
	     else
	     {
	         $query = $this->db->get('tbl_admin');
	         if ($query->num_rows() > 0)
	         {
	            return $query->result_array();
	         } 
	     }
    }

    function get_member_by_id($id){
    	return $this->db->get_where('tbl_admin', array('id' => $id))->row();
    }
     function get_member_by_email($email){
    	return $this->db->get_where('tbl_admin', array('email' => $email))->row();
    }

    function daftar($data) {   
    	$this->db->insert('tbl_admin',$data);   
   	}  

    public function getUserInfo($id){
    	$query = $this->db->get_where('tbl_admin',array('id'=>$id),1);
    	if($this->db->affected_rows()>0){
    		$row = $query->row();
    		return $row;
    	}else{
    		error_log('No User Found getUserInfo('.$id.')');
    		return false;
    	}
    }

     public function getUserInfoByEmail($email){
    	$query = $this->db->get_where('tbl_admin',array('email'=>$email),1);
    	if($this->db->affected_rows()>0){
    		$row = $query->row();
    		return $row;
    	}
    }

    public function insertToken($user_id){
    	    
	     $token = substr(sha1(rand()), 0, 30);   
	     $date = date('Y-m-d');  
	       
	     $string = array(  
	         'token'=> $token,  
	         'user_id'=>$user_id,  
	         'created'=>$date  
	       );  
	     $query = $this->db->insert_string('tbl_tokens',$string);  
	     $this->db->query($query);  
	     return $token . $user_id;  
    }

    public function isTokenValid($token){
    	$tkn = substr($token,0,30);
    	$uid = substr($token,30);

    	$q = $this->db->get_where('tbl_tokens', array(
    		'tbl_tokens.token' => $tkn,
    		'tbl_tokens.user_id' => $uid),1);
    	if($this->db->affected_rows()>0){
    		$row = $q->row();

    		$created = $row->created;
    		$createdTS = strtotime($created);
    		$today = date('Y-m-d');
    		$todayTS = strtotime($today);

    		if($createdTS != $todayTS){
    			return false;
    		}

    		$user_info = $this->getUserInfo($row->user_id);
    		return $user_info;

    	}else{
    		return false;
    	}
    }

    	public function updatePass($post){
    		$this->db->where('id',$post['id']);
    		$this->db->update('tbl_admin', array('password' => $post['password']));
    		return true;
    	}


    
}

?>