<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('M_CRUD', 'M_Settings'));
        $this->load->helper('date');
        $this->load->library('session');
    }

    public function index()
    {
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();
        $data['total_items'] = $this->M_CRUD->count_row('items');
        $data['total_received'] = $this->M_CRUD->count_row('received');
        $data['total_issue'] = $this->M_CRUD->count_row('issued');
        $data['total_lending'] = $this->M_CRUD->count_row('lending');
        $data['last_update'] = $this->M_CRUD->get_data_sort('history', 'id', 'desc')->result();
        $data['judul'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        // var_dump($data);die;
    }
}
