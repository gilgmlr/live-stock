l<?php

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
        // Pagination
        $config['base_url'] = base_url().'catalog/index';
        $config['total_rows'] = $this->M_CRUD->count_row('items');
        $config['per_page'] = 12;

        // Styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);


        $data['judul'] = 'Catalog';
        $data['start'] = $this->uri->segment(3);
        $data['items'] = $this->M_CRUD->get_data_limit('items', $config['per_page'], $data['start'])->result();

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