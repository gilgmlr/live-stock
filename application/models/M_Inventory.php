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
}