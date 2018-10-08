<?php

class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model','dashboard');
    }

    function index()
    {
        $data['content_view'] = 'Dashboard/dashboard1_v';
        $data['employee'] = $this->dashboard->get_EmployeesCount();
        
        $this->template->admin_template($data);
    }
}