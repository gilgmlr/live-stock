<?php

class M_Inventory extends CI_Model
{
	public function getDataStock()
	{
		$this->db->select('*');
		$this->db->from('inventory');

		$query = $this->db->get();
		return $query;
	}

	public function countRowsStock()
	{
		return $this->db->get('inventory')->num_rows();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('inventory');
		$this->db->join('items', 'items.item_code = inventory.item_code');
		$this->db->join('uom', 'uom.uom_code = inventory.uom_code');
		$query = $this->db->get();

		return $query;
	}
}