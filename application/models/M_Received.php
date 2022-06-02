<?php

class M_Received extends CI_Model
{
	public function add($data)
	{
		return $this->db->insert('received', $data);
	}

	public function getUoM()
	{
		$this->db->select('*');
		$this->db->from('uom');

		$query = $this->db->get();
		return $query;
	}
}