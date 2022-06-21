<?php

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // hapus session keyword
        if ($this->input->get('reset')) {
            $this->session->unset_userdata('keyword_catalog');
        }

        // Ambil data keyword search
        if ($this->input->post('search')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_catalog', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword_catalog');
        }

        // config
        $config['base_url'] = base_url().'catalog/index';
        $this->db->like('item_code', $data['keyword'])->or_like('name', $data['keyword'])->or_like('specification', $data['keyword'])->or_like('uom', $data['keyword']);
        $this->db->from('items');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Catalog';
        $data['start'] = $this->uri->segment(3);
        $data['items'] = $this->M_CRUD->get_data_limit('items', $config['per_page'], $data['start'], $data['keyword'], 'item_code', 'name', 'specification', 'uom')->result();

        $this->load->view('template/header', $data);
        $this->load->view('catalog/index', $data);

        // var_dump($data);die;
    }
}