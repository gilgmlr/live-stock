<?php

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
    }

    public function index()
    {
        $data['judul'] = 'Catalog';
        $data['items'] = $this->M_CRUD->get_data('items')->result();

        $this->load->view('template/header', $data);
        $this->load->view('catalog/index', $data);
    }

    public function view_result()
    {
        $data['judul'] = 'Catalog';
        $data['items'] = $this->M_CRUD->get_data('items')->result();

        $this->load->view('template/header', $data);
        $this->load->view('catalog/result');
    }
}