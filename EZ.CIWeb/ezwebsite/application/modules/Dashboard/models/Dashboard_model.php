<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{
    private $table = "employee";
    public function __construct(){
        parent::__construct();
        $this->load->database();
        //$this->db->reconnect();
    }

    function get_EmployeesCount(){
        
        $query = $this->db->get('employee');
        return $query->num_rows();
    }
    
}