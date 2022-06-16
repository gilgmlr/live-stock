<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('download');
		$this->load->library(array('form_validation', 'upload', 'excel'));
    }

    public function index()
    {
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
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('settings/add_account', $data);
    }

    public function view_import_data()
    {
        $data['judul'] = 'Settings/import_data';

        $this->load->view('template/header', $data);
        $this->load->view('settings/import_data');
    }
    public function view_table_user()
    {
        $data['judul'] = 'Settings/view_table_user';
        $data['users'] = $this->M_CRUD->get_data('user')->result();

        $this->load->view('template/header', $data);
        $this->load->view('settings/table_user');
    }
    public function view_all_items()
    {
        $data['judul'] = 'Settings/view_all_items';
        $item['item'] = $this->M_CRUD->get_data('items')->result();

        $this->load->view('template/header', $data);
        $this->load->view('settings/all_items', $item);
    }

    public function add_account()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required|numeric|is_unique[user.nip]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        $default_password = password_hash($this->input->post('nip'), PASSWORD_DEFAULT);

        if($this->form_validation->run() == false) { 
            $this->session->set_flashdata('flash', 'Add Account Failed, Please Try Again!');
			$this->view_add_account();
		} else {
            $data = array(
                'nip' => $this->input->post('nip'),
                'name' => $this->input->post('name'),
                'password' => $default_password,
                'warehouse_code' => $this->input->post('warehouse_code'),
                'role' => $this->input->post('role'),
            );
    
            $this->M_CRUD->input_data('user', $data);
            $this->session->set_flashdata('flash', 'Add Account ' . $this->input->post('nip') . ' Success!');
            redirect('settings/view_add_account');

            // var_dump($data);die;
        }
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required|is_unique[items.item_code]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('uom', 'Uom', 'required');

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Add Item Failed, Please Try Again!');
			$this->view_add_items();
		} else {
            $config = $this->upload->initialize(array(
				"upload_path" => './assets/catalog/',
				"allowed_types" => 'gif|jpg|jpeg|png',
				"remove_spaces" => TRUE,
				"file_name" => $this->input->post('item_code')
			));

			$this->load->library('upload', $config);
            
                $data = $this->upload->data();

                $image = $data['file_name'];
    
                $data = array(
                    'item_code' => $this->input->post('item_code'),
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'uom' => $this->input->post('uom'),
                    'image' => $image,
                );
                // var_dump($config);die;
    
                $this->M_CRUD->input_data('items', $data);
                $this->session->set_flashdata('flash', 'Add item ' . $this->input->post('name') . ' Success!');
                redirect('settings/view_add_items');
        }
    }
    
    public function import()
    {
        date_default_timezone_set('Asia/Jakarta');
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
                        if ($table == 'warehouse') {
                            $data[] = array(
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'warehouse_name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        } else if ($table == 'user') {
                            $data[] = array(
                                'nip' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                'password' => password_hash($worksheet->getCellByColumnAndRow(0, $row)->getValue(), PASSWORD_DEFAULT),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'role' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                            );
                        } else if ($table == 'uom') {
                            $data[] = array(
                                'uom_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'uom_name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        } else if ($table == 'department') {
                            $data[] = array(
                                'dept_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        } else if ($table == 'items') {
                            //$item = $this->db->get_where('items', ['item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue()])->row_array();
                            //if ($item == null) {
                                $data[] = array(
                                    'item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                    'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                    'specification' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                    'uom' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                                    'image' => $worksheet->getCellByColumnAndRow(0, $row)->getValue().'.jpg',
                                );                            
                        } else if ($table == 'history_transaction') {
                            $data[] = array(
                                'doc_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue())),
                                'system_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue())),
                                'source_doc' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'destination_doc' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                                'item_code' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                                'qty' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                            );   

                            // if (substr($worksheet->getCellByColumnAndRow(2, $row)->getValue(),0,1) == "MI") {
                            //     $mi = array(
                            //         'doc_no' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                            //         'entri_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue())),
                            //         'posting_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue())),
                            //         'dept_no' => '',
                            //         'project_no' => '',
                            //         'item_code' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                            //         'warehouse_code' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                            //         'transaction_qty' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                            //         'reference' => '',
                            //         'reason_code' => '',
                            //         'description' => '',
                            //         'created_by' => "Import Data",
                            //     );

                            //     $this->M_CRUD->input_data('material_issue', $mi);
                            // }
                        }
                    }
                } 
            }
 
            $this->db->insert_batch($table, $data);
            // $this->db->insert_batch("material_issue", $mi);
            $this->session->set_flashdata('flash', 'Import File Excel Saved in database ' . $table);
            redirect('settings/view_import_data');
        } else {
            $this->session->set_flashdata('flash', 'Import File is Failed, Please Try Again!');
            redirect('settings/view_import_data');
        }
    }

    public function import_history()
    {
        date_default_timezone_set('Asia/Jakarta');
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
                        $doc_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue()));
                        $system_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue()));
                        $source_doc = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                        $dest = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                        $item_code = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                        $qty = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                        $warehouse = $worksheet->getCellByColumnAndRow(6, $row)->getValue();

                        $data[] = array(
                            'doc_date' => $doc_date,
                            'system_date' => $system_date,
                            'source_doc' => $source_doc,
                            'destination_doc' => $dest,
                            'item_code' => $item_code,
                            'qty' => $qty,
                            'warehouse_code' => $warehouse,
                        ); 

                        if (substr($source_doc, 0,1) == "MI") {
                            $mi[] = array(
                                'doc_no' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'entri_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue())),
                                'posting_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue())),
                                'dept_no' => '',
                                'project_no' => '',
                                'item_code' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                                'transaction_qty' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                                'reference' => '',
                                'reason_code' => '',
                                'description' => '',
                                'created_by' => "Import Data",
                            );
                        }
                    }
                } 
            }
 
            $this->db->insert_batch($table, $data);
            $this->db->insert_batch("material_issue", $mi);
            $this->session->set_flashdata('flash', 'Import File Excel Saved in database ' . $table);
            redirect('settings/view_import_data');
        } else {
            $this->session->set_flashdata('flash', 'Import File is Failed, Please Try Again!');
            redirect('settings/view_import_data');
        }
    }

    public function change_password()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('newpassword', 'Newpassword', 'required');

        $nip = $this->session->userdata('nip');
        $password = $this->input->post('password');
        $new_password = password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT);

        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();

        if($this->form_validation->run() == false) {
			redirect('settings');
		} else {
            if(password_verify($password, $user['password'])) {
                $data = array(
                    'nip' => $nip,
                    'name' => $this->session->userdata('name'),
                    'password' => $new_password,
                    'role' => $this->session->userdata('role'),
                );

                $this->M_CRUD->update_data('user', $data, ['nip' => $nip]);
                $this->session->set_flashdata('flash', 'Change Password Success!');
                redirect('settings');
            } else {
                $this->session->set_flashdata('flash', 'Password Now Incorrect, Please Try Again!');
                redirect('settings');
            }
        }
    }

    public function update_item()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('uom', 'uom', 'required');
        
        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Change item '. $this->input->post('item_code') . ' Failed!');
			redirect('settings/view_all_items');
		} else {
            $item = $this->db->get_where('items', ['item_code' => $this->input->post('item_code')])->row_array();
                $data = array(
                    'item_code' => $item['item_code'],
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'uom' => $this->input->post('uom'),
                    'image' => $item['image'],
                );

                $this->M_CRUD->update_data('items', $data, ['item_code' => $this->input->post('item_code')]);
                $this->session->set_flashdata('flash', 'Change item '.$item['item_code'] . ' Success!');
                redirect('settings/view_all_items');
        }
    }

    public function reset_password()
    {
        $nip = $this->input->get('nip');

        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();
        
        $data = array(
            'nip' => $nip,
            'name' => $user['name'],
            'password' => password_hash($nip, PASSWORD_DEFAULT),
            'warehouse_code' => $user['warehouse_code'],
            'role' => $user['role']
        );

		$this->M_CRUD->update_data('user', $data, ['nip' => $nip]);
        $this->session->set_flashdata('flash', 'Password Account ' . $nip . ' Reset Successs!');
		redirect('settings/view_table_user');
    }

    public function delete_account()
    {
        $nip = $this->input->get('nip');

		$this->M_CRUD->delete_data('user', ['nip' => $nip]);
        $this->session->set_flashdata('flash', 'Account ' . $nip . ' Deleted!');
		redirect('settings/view_table_user');
    }

    public function delete_item()
    {
        $item_code = $this->input->get('item_code');

		$this->M_CRUD->delete_data('items', ['item_code' => $item_code]);
        $this->session->set_flashdata('flash', 'Item ' . $item_code . ' Deleted!');
		redirect('settings/view_all_items');
    }
    
    public function download()
    {	
        $name = $this->input->get('name');
		force_download('assets/excel/'. $name . '.xlsx',NULL);
	}	

    // create xlsx
    public function generateXls() 
    {
        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $listInfo = $this->M_CRUD->get_data('history_transaction')->result();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Document Date');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'System Date');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Source Doc');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Destination Doc');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Item Code');       
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'QTY Transaction');       
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Warehouse Code');       
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->doc_date);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->system_date);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->source_doc);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->destination_doc);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->item_code);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->qty);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->warehouse_code);
            $rowCount++;
        }
        $filename = "Export History ". date("Y-m-d-H-i-s").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
 
    }

    public function export(){
        // Load plugin PHPExcel nya
        include APPPATH.'libraries/PHPExcel/PHPExcel.php';
        
        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        // $excel->getProperties()->setCreator($this->session->userdata['name'])
        //              ->setLastModifiedBy($this->session->userdata['name'])
        //              ->setTitle("History Transaction")
        //              ->setSubject("Warehouse")
        //              ->setDescription("History Transaction")
        //              ->setKeywords("History Transaction");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Document Date"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->setActiveSheetIndex(0)->setCellValue('B1', "System Date"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->setActiveSheetIndex(0)->setCellValue('C1', "Source Doc"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('D1', "Destination Doc"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('E1', "Item Code"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('F1', "QTY"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('G1', "Warehouse Code"); // Set kolom B3 dengan tulisan "NIS"
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $siswa = $this->M_CRUD->get_data('history_transaction')->result();
        // $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($siswa as $data){ // Lakukan looping pada variabel siswa
          $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->doc_date);
          $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->system_date);
          $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->source_doc);
          $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->destination_doc);
          $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->item_code);
          $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->qty);
          $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->warehouse_code);
          
          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
          
        //   $no++; // Tambah 1 setiap kali looping
          $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(10); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom E
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("History Transaction");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="History Transaction.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'CSV');
        $write->save('php://output');
      }
}