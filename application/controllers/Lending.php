<?php

class Lending extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
    }

    public function index()
    {        
        // hapus session keyword
        if ($this->input->get('reset')) {
            $this->session->unset_userdata('keyword_lending');
        }

        // Ambil data keyword search
        if ($this->input->post('search')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_lending', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword_lending');;
        }

        // config
        $config['base_url'] = base_url().'lending/index';
        $this->db->like('lending_no', $data['keyword'])->or_like('lending_date', $data['keyword'])->or_like('item_code', $data['keyword'])->or_like('dept_code', $data['keyword'])
        ->or_like('warehouse_code', $data['keyword'])->or_like('status', $data['keyword'])->or_like('lending_qty', $data['keyword'])->or_like('borrower_name', $data['keyword']);
        $this->db->from('lending');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Lending';
        $data['start'] = $this->uri->segment(3);
        
        $this->db->like('lending_no', $data['keyword'])->or_like('lending_date', $data['keyword'])->or_like('item_code', $data['keyword'])->or_like('dept_code', $data['keyword'])
        ->or_like('warehouse_code', $data['keyword'])->or_like('status', $data['keyword'])->or_like('lending_qty', $data['keyword'])->or_like('borrower_name', $data['keyword']);
        $this->db->from('lending');
        $this->db->limit($config['per_page'], $data['start']);
        $data['lending'] = $this->db->get()->result();

        $this->load->view('template/header', $data);
        $this->load->view('lending/index', $data);
    }
}