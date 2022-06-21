<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->where(['status' => 'open']);
        $this->db->order_by('lending_date', 'asc');
        $this->db->limit(1000, 0);
        $this->db->from('lending');
        $data['lending'] = $this->db->get()->result();
        
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();
        $data['total_items'] = $this->M_CRUD->count_row('items');
        $data['total_received'] = $this->M_CRUD->count_row('received');
        $data['total_issue'] = $this->M_CRUD->count_row('issued');
        $data['total_lending'] = $this->M_CRUD->count_row('lending');
        $data['last_update'] = $this->M_CRUD->get_data_sort('history_transaction', 'id', 'desc')->result();
        $data['judul'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        // var_dump($data);die;
    }
}