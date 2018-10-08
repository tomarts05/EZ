<?php

class Template extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model','login');
    }

    function index($data = NULL)
    {
        
        $this->load->view('Template/sample_template_v', $data);
    }
    function admin_template($data = NULL)
    {
        
        $this->load->view('Template/admin_template', $data);
    }
    function login_template($data = NULL)
    {
        
        $this->load->view('Template/login-template', $data);
    }
    function login(){
        $postData = $this->input->post();
        $validate = $this->login->validate_login($postData);
        if ($validate){
            $newdata = array(
                'email'     => $validate[0]->E_Mail,
                'name' => $validate[0]->Employee_Name_English,
                'role' => $validate[0]->Position,
                'user_id' => $validate[0]->Emp_ID,
                'logged_in' => TRUE,
              
            );
            $this->session->set_userdata($newdata);
            redirect(base_url("dashboard")); 
        }
        else{
            $data = array('alert' => true);
            $this->load->view('Template/login-template',$data);
        }
     
    }
}