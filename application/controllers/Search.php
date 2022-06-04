<?php

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Search');
    }

    public function index()
    {
        $data['judul'] = 'Search';
        $data['items'] = $this->M_Search->getDataItems()->result();

        $this->load->view('template/header', $data);
        $this->load->view('search/index', $data);
    }

    public function view_result()
    {
        $data['judul'] = 'Search/Result';
        $data['items'] = $this->M_Search->getDataItems()->result();

        $this->load->view('template/header', $data);
        $this->load->view('search/result');
    }
    public function view_detail()
    {
        $data['judul'] = 'Search/Detile';
        $data['items'] = $this->M_Search->getDataItems()->result();

        $this->load->view('template/header', $data);
        $this->load->view('search/detail');
    }
}