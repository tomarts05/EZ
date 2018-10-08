<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function validate_login($postData){
    $this->db->select('*');
    $this->db->where('E_Mail', $postData['username']);
    //$this->db->where('password', md5($postData['password']));
    //$this->db->where('status', 1);
    $this->db->from('employee');
    $query=$this->db->get();
    if ($query->num_rows() == 0)
        return false;
    else
        return $query->result();
    }
}