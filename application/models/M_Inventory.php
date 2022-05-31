<?php

class M_Inventory extends CI_Model
{
	public function getDataStock()
	{
		$this->db->select('*');
		$this->db->from('data_barang');

		$query = $this->db->get();
		return $query;
	}

	public function countRowsStock()
	{
		return $this->db->get('data_barang')->num_rows();
	}
}