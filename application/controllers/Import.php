<?php

class Import extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
		$this->load->library('excel');
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $table = $this->input->post('table_name');
			
        if(isset($_FILES["file"]["name"]) && (pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION) == 'xls' || pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION) == 'xlsx')){
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
                            $data[] = array(
                                'item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                'specification' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'uom' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                                'remarks' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                                // 'image' => $worksheet->getCellByColumnAndRow(0, $row)->getValue().'.jpg',
                                'image' => 'default.jpg',
                            );                            
                        } else if ($table == 'inventory') {
                            $data[] = array(
                                'item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'location' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                'stocks' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                                'equipment' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                                'status' => '1',
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
                        }
                    }
                } 
            }
 
            $this->db->insert_batch($table, $data);
            // $this->db->insert_batch("material_issue", $mi);
            $this->session->set_flashdata('flash', 'Import File Excel Saved in database ' . $table);
            redirect('settings/view_import_data');
        } else {
            $this->session->set_flashdata('flash', 'Import File is Failed, Your file type not excel!');
            redirect('settings/view_import_data');
        }
    }
}