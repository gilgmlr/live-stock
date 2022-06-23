<?php

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
		$this->load->library('upload');
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

    public function update_item() 
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('uom', 'uom', 'required');
        
        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Change item '. $this->input->post('item_code') . ' Failed!');
			redirect('catalog');
		} else {
            $item = $this->db->get_where('items', ['item_code' => $this->input->post('item_code')])->row_array();

            if (empty($_FILES["image"]["name"])) {
                $image = $item['image'];
            } else {
                $config = $this->upload->initialize(array(
                    "upload_path" => './assets/catalog/',
                    "allowed_types" => 'jpg|jpeg|png',
                    "remove_spaces" => TRUE,
                    "overwrite" => TRUE,
                    "file_name" => $this->input->post('item_code')
                ));
    
                $data = $this->upload->data();

                if (pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == 'jpg' || pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == 'png' || pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == 'jpeg' || pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == '') {
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('image');

                    $image = $data['file_name'] . '.' . pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
                } else {
                    $this->session->set_flashdata('flash', 'Type Image ' . $this->input->post('name') . ' Invalid!');
                    redirect('catalog');
                }
            }
                $data = array(
                    'item_code' => $item['item_code'],
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'uom' => $this->input->post('uom'),
                    'remarks' => $this->input->post('remarks'),
                    'image' => $image,
                );

                $this->M_CRUD->update_data('items', $data, ['item_code' => $this->input->post('item_code')]);
                $this->session->set_flashdata('flash', 'Change item '.$item['item_code'] . ' Success!');
                redirect('catalog');
        }
    }

}