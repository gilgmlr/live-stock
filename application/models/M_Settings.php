<?php

class M_Settings extends CI_Model
{
	public function insert($data) {
		$res = $this->db->insert_batch('import',$data);
		if($res){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}