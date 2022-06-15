<?php

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['history'] = $this->M_CRUD->get_data_sort('history_transaction', 'id', 'desc')->result();
        $data['judul'] = 'History';

        $this->load->view('template/header', $data);
        $this->load->view('history/index', $data);
    }
}
