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

	public function get_total_items()
	{
		$this->db->select('*');
		$this->db->from('items');

		$query = $this->db->get();
		return $query;
	}

	function get_total_biaya()
	{
		return $this->db->query("SELECT SUM(biaya_rad) as total FROM pemeriksaan_radiologi");
	}
}