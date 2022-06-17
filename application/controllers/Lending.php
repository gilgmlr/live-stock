<?php

class Lending extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Ambil data keyword search
        if ($this->input->post('search')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_lending', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword_lending');;
        }

        // config
        $config['base_url'] = base_url().'lending/index';
        $this->db->like('lending_no', $data['keyword'])->or_like('item_code', $data['keyword'])->or_like('dept_code', $data['keyword'])->or_like('warehouse_code', $data['keyword'])->or_like('status', $data['keyword']);
        $this->db->from('lending');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Lending';
        $data['start'] = $this->uri->segment(3);
        $data['lending'] = $this->M_CRUD->get_data_limit('lending', $config['per_page'], $data['start'], $data['keyword'], 'lending_no', 'item_code', 'dept_code', 'warehouse_code', 'status')->result();

        // $data['lending'] = $this->M_CRUD->get_data('lending')->result();


        $this->load->view('template/header', $data);
        $this->load->view('lending/index', $data);
    }
}