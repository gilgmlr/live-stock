<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Settings');
		$this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Settings';

        $this->load->view('template/header', $data);
        $this->load->view('settings/index', $data);
    }

    public function view_add_items()
    {
        $data['judul'] = 'Settings/add_items';

        $this->load->view('template/header', $data);
        $this->load->view('settings/add_items');
    }

    public function view_add_account()
    {
        $data['judul'] = 'Settings/add_account';

        $this->load->view('template/header', $data);
        $this->load->view('settings/add_account');
    }

    public function view_import_data()
    {
        $data['judul'] = 'Settings/import_data';

        $this->load->view('template/header', $data);
        $this->load->view('settings/import_data');
    }

    public function add_account()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        $default_password = password_hash($this->input->post('nip'), PASSWORD_DEFAULT);

        if($this->form_validation->run() == false) {
			redirect('settings/add_account');
		} else {
            $data = array(
                'nip' => $this->input->post('nip'),
                'name' => $this->input->post('name'),
                'password' => $default_password,
                'role' => $this->input->post('role'),
            );
    
            $this->M_Settings->add_user($data);
            redirect('settings/view_add_account');

            // var_dump($data);die;
        }
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');

        if($this->form_validation->run() == false) {
			redirect('settings/view_add_itemss');
		} else {
            $config = $this->upload->initialize(array(
				"upload_path" => './assets/catalog/',
				"allowed_types" => 'gif|jpg|png',
				"remove_spaces" => TRUE,
				"file_name" => $this->input->post('item_code') . '-' . $_FILES["image"]['name']
			));

			$this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('image')) {
                redirect('settings/view_add_items');
            } else {
                $data = $this->upload->data();

                $image = $data['file_name'];
    
                $data = array(
                    'item_code' => $this->input->post('item_code'),
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'image' => $image,
                );
                // var_dump($config);die;
    
                $this->M_Settings->add_item($data);
                redirect('settings/view_add_items');
            }
        }
    }
}