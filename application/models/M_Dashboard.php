<?php

class M_Dashboard extends CI_Model
{
	public function getDataWarehouse()
	{
		$this->db->select('*');
		$this->db->from('warehouse');

		$query = $this->db->get();
		return $query;
	}

	public function countRowsWarehouse()
	{
		return $this->db->get('warehouse')->num_rows();
	}
}
