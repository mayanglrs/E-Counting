 <?php

class M_user extends CI_Model
{
	function getData(){
		$id = $this->session->userdata('sess_id');
        $query = $this->db->query("SELECT * from calon where id_pm='".$id."' and status='1' group by no_urut")->result();
        return $query;
        
   	// 		echo '<pre>';
			 //  var_dump($query);
			 // echo '</pre>';
			 // die();	
    }

    function cekCalon(){
    $data_calon["data_calon"] = $this->getData();
    if(count($data_calon) >0){
			$this->session->set_flashdata('success','Kamu siap untuk memilih!');
			$this->load->view('user/memilih');
		}else{
			$this->session->set_flashdata('error','Kamu belum memilih data pemilihan!');
			$this->load->view('user/pemilih');
		}
	}
	function insert_pilihan($id){

		$id_calon = $id;
		$id_sess = $this->session->userdata('sess_id');

	    $cek_calon = $this->db->get_where('calon', ['id' => $id_calon])->row_array();
	    $nama_calon = $cek_calon['nama'];

	    $pm = $this->db->query("SELECT * from tbl_pemilihan where id_pm='".$id_sess."'")->row_array();

			 $pilihan = [
		        'id_calon' => $id,
		        'id_pemilihan' => $pm['id_pm'],
		        'pilihan' => $nama_calon,
		        'tanggal' => date('Y-m-d')
		      ];

		      // echo '<pre>';
		      // 	var_dump($pilihan);
		      // echo '</pre>';
		      //  die();
			return $query = $this->db->insert('pilihan', $pilihan);
		
	}
	public function getHasil(){
	$id = $this->session->userdata('sess_id');
   	$query = $this->db->query("SELECT * from calon where id_pm='".$id."' and status='1' group by no_urut");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}


}