<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
   
 class Lupa_password extends CI_Controller {  
    function __construct()
    {
      parent::__construct();
      $this->load->model("Admin_model");
    }

    public function login(){
       $this->load->view('login_admin');
    }
   
     public function index()  
     {  
         
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');   
         
         if($this->form_validation->run() == FALSE) {  
             $this->load->view('forgot_pass');  
         }else{  
             $email = $this->input->post('email');   
             $clean = $this->security->xss_clean($email);  
             $userInfo = $this->Admin_model->getUserInfoByEmail($clean);  
               
             if(!$userInfo){  
               $this->session->set_flashdata('sukses', 'email address salah, silakan coba lagi.');  
               redirect('Lupa_password/login','refresh');   
             }    
               
             //build token   
                       
             $token = $this->Admin_model->insertToken($userInfo->id);              
             $qstring = $this->base64url_encode($token);           
             $url = site_url() . '/admin/confirm_pass/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
               
             $message = '';             
             $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';  
             $message .= '<strong>Silakan klik link ini:</strong> ' . $link;         
   
             echo $message; //send this through mail  
             exit;  
           
         }  
         
     }  
   
     public function reset_password()  
     {  
       $token = $this->base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->Admin_model->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');  
          redirect('Lupa_password/login','refresh');   
       }    
   
       $data = array(  
         'nama'=> $user_info->nama,   
         'email'=>$user_info->email,   
         'token'=>$this->base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('confirm_pass', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) {    
         $this->load->view('reset_pass', $data);  
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
         $cleanPost = $this->security->xss_clean($post);

         $email =  $cleanPost['email']; 
         $pass =  $cleanPost['password']; 

         $hashed = sha1(md5($email).md5($password));          
         $cleanPost['password'] = $hashed;  
         $cleanPost['id'] = $user_info->id;  
         unset($cleanPost['confirm_pass']);          
         if(!$this->m_account->updatePassword($cleanPost)){  
           $this->session->set_flashdata('sukses', 'Update password gagal.');  
         }else{  
           $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');  
         }  
          redirect('Lupa_password/login','refresh');        
       }  
     }  
       
   public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
   public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   }    
 }  