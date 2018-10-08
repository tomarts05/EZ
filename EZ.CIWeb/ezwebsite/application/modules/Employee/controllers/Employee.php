<?php

class Employee extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('employee_model','employees');
    }

    function index()
    {
        $data['content_view'] = 'Employee/employee-list';
        //$data['employees'] = "SELECT * FROM employees ORDER BY id DESC"; //$this->employee_model->get_employees();
        $data['employees'] = $this->employees->get_employees();
        
        $this->template->admin_template($data);
    }
    function view($id)
    {
        $data['content_view'] = 'Employee/employee-view';
        //$data['employees'] = "SELECT * FROM employees ORDER BY id DESC"; //$this->employee_model->get_employees();
        //$data['employees'] = $this->employees->get_employees();
        if(!empty($id)){
            $data['employee'] = $this->employees->getRows($id);

            $this->template->admin_template($data);
        }else{
            redirect('/employee');   
        }
    }
    function form()
    {
        $data['content_view'] = 'Employee/employee-form';
        //$data['employees'] = "SELECT * FROM employees ORDER BY id DESC"; //$this->employee_model->get_employees();
        //$data['employees'] = $this->employees->get_employees();
        
        $this->template->admin_template($data);
    }
    function Save()
    {

        $data = array('Employee_Name_English' => $this->input->post('firstname') . " " . 
        $this->input->post('lastname'), 
        'E_Mail' => $this->input->post('email'), 
        'Mobile' => $this->input->post('mobile'), 
        'Position' => $this->input->post('position'), 
        'Department' => $this->input->post('department'), 
        'Division' => $this->input->post('division'));
            
        $this->employees->add_employee($data);
        redirect('/employee');
    }
    
    public function delete($id){
        //check whether post id is not empty
        if($id){
            //delete post
            $delete = $this->employees->delete_employee($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Post has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }

        redirect('/employee');
    }
    public function edit($id){

        //get post data
        $postData = $this->post->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('name', 'post name', 'required');
            $this->form_validation->set_rules('email', 'post email', 'required');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->employees->update($postData, $id);

                if($update){
                    $this->session->set_userdata('success_msg', 'Post has been updated successfully.');
                    redirect('/employee');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }

        
        // $data['post'] = $postData;
        // $data['title'] = 'Update Post';
        // $data['action'] = 'Edit';
        
        //load the edit page view
        $this->template->admin_template($data);
    }
}