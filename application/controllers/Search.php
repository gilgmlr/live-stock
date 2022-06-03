<?php

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //$this->load->model('M_Stock');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Search';

        $this->load->view('template/header', $data);
        $this->load->view('search/index', $data);
    }

    public function view_result()
    {
        $data['judul'] = 'Search/Result';

        $this->load->view('template/header', $data);
        $this->load->view('search/result');
    }
    public function view_detile()
    {
        $data['judul'] = 'Search/Detile';

        $this->load->view('template/header', $data);
        $this->load->view('search/detile');
    }
}