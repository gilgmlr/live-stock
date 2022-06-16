<?php

class History extends CI_Controller
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
            $this->session->set_userdata('keyword_history', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword_history');;
        }

        // config
        $config['base_url'] = base_url().'history/index';
        $this->db->like('doc_date', $data['keyword'])->or_like('system_date', $data['keyword'])->or_like('source_doc', $data['keyword'])->or_like('destination_doc', $data['keyword'])->or_like('item_code', $data['keyword'])->or_like('qty', $data['keyword'])->or_like('warehouse_code', $data['keyword']);
        $this->db->from('history_transaction');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        // Initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['history'] = $this->M_CRUD->get_data_limit('history_transaction', $config['per_page'], $data['start'], $data['keyword'])->result();
        // $data['history'] = $this->M_CRUD->get_data_sort('history_transaction', 'id', 'desc')->result();
        $data['judul'] = 'History';

        $this->load->view('template/header', $data); 
        $this->load->view('history/index', $data);
    }
}
