<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Employee_model extends CI_Model{
        private $table = "employee";
        public function __construct(){
            parent::__construct();
            $this->load->database();
            //$this->db->reconnect();
        }

        function getRows($id = ""){
            if(!empty($id)){
                $query = $this->db->get_where('employee', array('id' => $id));
                return $query->row_array();
            }else{
                $query = $this->db->get('employee');
                return $query->result_array();
            }
        }
        public function get_employees(){
            $query = $this->db->get('employee');
            return $query->result_array();
        }

        public function add_employee($data){
            $insert = $this->db->insert('employee', $data);
            return $insert;
        }

        public function delete_employee($id){
            $delete = $this->db->delete('employee',array('Id'=>$id));
            return $delete?true:false;
        }
        
        public function update($data, $id) {
            if(!empty($data) && !empty($id))
            {
                $update = $this->db->update('employee', $data, array('Id'=>$id));
                return $update?true:false;
            }
            else
            {
                return false;
            }
        }
    }