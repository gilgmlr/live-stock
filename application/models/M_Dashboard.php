<?php

class M_Dashboard extends CI_Model
{
	public function getDataWarehouse()
	{
		$this->db->select('*');
		$this->db->from('inventory');

		$query = $this->db->get();
		return $query;
	}

	public function countRowsWarehouse()
	{
		return $this->db->get('inventory')->num_rows();
	}
}