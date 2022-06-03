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

	public function getItems()
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->order_by('item_code', 'asc');

		$query = $this->db->get();
		return $query;
	}
}