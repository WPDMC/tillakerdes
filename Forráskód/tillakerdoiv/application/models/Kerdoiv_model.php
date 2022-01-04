<?php


class Kerdoiv_model extends CI_Model {
    public function __construct() {

         parent::__construct();
         
         $this->load->database();
    }
    public function get_all_post(){

        $this->db->select("id, leiras, valasz_azon"); 
        $this->db->from('kerdesek'); 

        $records = $this->db->get()->result();
        return $records;



    }
}
