<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class kota_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getKota()
    {
       
        $query = $this->db->query('SELECT * FROM sandi_kota');
        return $this->db->query($query)->result();

    }
}

    ?>