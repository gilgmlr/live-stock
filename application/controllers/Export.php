<?php

class Export extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('excel');
    }

    public function history() 
    {
        $keyword = $this->input->get('key');
        $this->db->like('doc_date', $keyword)->or_like('system_date', $keyword)->or_like('source_doc', $keyword)->or_like('destination_doc', $keyword)
        ->or_like('item_code', $keyword)->or_like('qty', $keyword)->or_like('warehouse_code', $keyword);
        $this->db->from('history_transaction');
        $listInfo = $this->db->get()->result();

        // create file name
        $fileName = 'History Transaction-'.time().'.xlsx';  
        // load excel library
        // $listInfo = $this->M_CRUD->get_data('history_transaction')->result();
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
        $filename = "History Transaction ". date("Y-m-d-H-i-s").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
    }

    public function inventory() 
    {
        $keyword = $this->input->get('key');
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('items', 'inventory.item_code = items.item_code');
        $this->db->join('warehouse', 'inventory.warehouse_code = warehouse.warehouse_code');
        $this->db->like('inventory.item_code', $keyword)->or_like('warehouse.warehouse_code', $keyword)->or_like('items.name', $keyword)->or_like('items.specification', $keyword)
        ->or_like('items.uom', $keyword)->or_like('inventory.location', $keyword)->or_like('inventory.equipment', $keyword);;
        $listInfo = $this->db->get()->result();

        // create file name
        $fileName = 'Inventory-'.time().'.xlsx';  
        // load excel library
        // $listInfo = $this->M_CRUD->get_join('inventory', 'items', 'inventory.item_code = items.item_code')->result();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Item Code');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Item Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Item Specification');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Location');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Stocks');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'UoM');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Warehouse Code');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Equipment');     

        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->item_code);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->specification);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->location);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->stocks);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->uom);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->warehouse_code);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $list->equipment);
            $rowCount++;
        }
        $filename = "Inventory ". date("Y-m-d-H-i-s").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
 
    }
}