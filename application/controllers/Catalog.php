<?php

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
        $this->load->library('pagination');
    }

    public function index()
    {
        // Ambil data keyword search
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');;
        }

        // config
        $this->db->like('name', $data['keyword'])->or_like('item_code', $data['keyword'])->or_like('specification', $data['keyword']);
        $this->db->from('items');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Catalog';
        $data['start'] = $this->uri->segment(3);
        $data['items'] = $this->M_CRUD->get_data_limit('items', $config['per_page'], $data['start'], $data['keyword'])->result();

        $this->load->view('template/header', $data);
        $this->load->view('catalog/index', $data);

        // var_dump($data);die;
    }

    public function view_result()
    {
        $data['judul'] = 'Catalog';
        $key = $this->input->post('key');
        $data['items'] = $this->db->get_where('items', ['item_code' => $key])->result();
        // $data['items'] = $this->M_CRUD->get_or_like('items', 'item_code', 'name', $key);

        $this->load->view('template/header', $data);
        $this->load->view('catalog/result');

        // var_dump($data['items']);die;
    }
}