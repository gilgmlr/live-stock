<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
		$this->load->library(array('form_validation', 'upload', 'excel'));
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
    
            $this->M_CRUD->input_data('user', $data);
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
				"allowed_types" => 'gif|jpg|jpeg|png',
				"remove_spaces" => TRUE,
				"file_name" => $this->input->post('item_code')
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
    
                $this->M_CRUD->input_data('items', $data);
                redirect('settings/view_add_items');
            }
        }
    }
    
    public function importWarehouse()
        {
            $table = $this->input->post('table_name');
            if(isset($_FILES["file"]["name"])){
                  // upload
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_type=$_FILES['file']['type'];
                // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
                
                $object = PHPExcel_IOFactory::load($file_tmp);
                
        
                foreach($object->getWorksheetIterator() as $worksheet){
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
        
                    for($row=3; $row<=$highestRow; $row++){
                        
                        if ($worksheet->getCellByColumnAndRow(0, $row)->getValue() != null) {
                            $data[] = array(
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'warehouse_name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        }
                    } 
                }
        
                $this->db->insert_batch($table, $data);
        
                $message = array(
                    'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('settings');
            }
            else
            {
                 $message = array(
                    'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('settings/view_add_items');
            }
        }
}