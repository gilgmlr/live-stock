<?php

class M_Settings extends CI_Model
{
	public function add_item($item)
	{
		return $this->db->insert('items', $item);
	}

	public function add_user($user)
	{
		return $this->db->insert('user', $user);
	}

	public function insert($data) {
		$res = $this->db->insert_batch('import',$data);
		if($res){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}