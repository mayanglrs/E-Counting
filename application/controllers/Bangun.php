<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bangun extends CI_Controller {
  public function index()
 {
  $this->load->view('admin/cobs/input');
 }
 
 function hasil()
 {
  //balok
  $panjang = $this->input->post('panjang');
  $lebar = $this->input->post('lebar');
  $tinggibalok = $this->input->post('tinggibalok');
  //tabung
  $jari2luas = $this->input->post('jari2luas');
  $jari2volume = $this->input->post('jari2volume');
  $tinggitabung = $this->input->post('tinggitabung');
  //limas segiempat
  $sisilimas = $this->input->post('sisilimas');
  $alaslimas = $this->input->post('alaslimas');
  $tinggilimas = $this->input->post('tinggilimas');
  //prisma segitiga
  $alassegitiga = $this->input->post('alassegitiga');
  $tinggisegitiga = $this->input->post('tinggisegitiga');
  $tinggiprisma = $this->input->post('tinggiprisma');
  
  if($this->input->post('luasbalok')){
   $jawaban = 2*(($panjang*$lebar)+($panjang*$tinggibalok)+($lebar*$tinggibalok)); 
   $bangun = 'Bangun Balok';
   $jenis = 'Luas : ';
  }
  
   if($this->input->post('volumebalok')){
   $jawaban = $panjang*$lebar*$tinggibalok;
   $bangun = 'Bangun Balok';
   $jenis = 'Volume : ';
  }
  
  if($this->input->post('luastabung')){
   $jawaban = 3.14*$jari2luas*$jari2luas;
   $bangun = 'Bangun Tabung';
   $jenis = 'Luas : ';
  }
  
  if($this->input->post('volumetabung')){
   $jawaban = 3.14*$jari2volume*$jari2volume*$tinggitabung;
   $bangun = 'Bangun Tabung';
   $jenis = 'Volume : ';
  }
  
  if($this->input->post('luaslimas')){
   $luasalas = $sisilimas*$sisilimas;
   $luassisi = (0.5*$alaslimas*$tinggilimas)*4;
   $jawaban = $luasalas + (4*$luassisi);
   $bangun = 'Bangun Limas Segiempat';
   $jenis = 'Luas : ';
  }
  
  if($this->input->post('volumelimas')){
   $luasalas = $sisilimas*$sisilimas;
   $jawaban = 1/3*$luasalas*$tinggilimas;
   $bangun = 'Bangun Limas Segiempat';
   $jenis = 'Volume : ';
  }
  
  if($this->input->post('luasprisma')){
   $jawaban = $tinggisegitiga*($alassegitiga + (3*$tinggiprisma));
   $bangun = 'Bangun Prisma Segitiga';
   $jenis = 'Luas : ';
  }
  
  if($this->input->post('volumeprisma')){
   $jawaban = 0.5*$alassegitiga*$tinggisegitiga*$tinggiprisma;
   $bangun = 'Bangun Prisma Segitiga';
   $jenis = 'Volume : ';
  }
  
  $data=array(
   'jawaban' => $jawaban,
   'bangun' => $bangun,
   'jenis' => $jenis
  );
  
  $this->load->view('admin/cobs/hasil',$data);

  }
  
}