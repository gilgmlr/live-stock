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

	public function get_total_items()
	{
		return $this->db->get('items')->num_rows();
	}

	public function get_total_received()
	{
		return $this->db->get('received')->num_rows();
	}

	public function get_total_issue()
	{
		return $this->db->get('issued')->num_rows();
	}

	public function get_total_lending()
	{
		return $this->db->get('lending')->num_rows();
	}

	function get_total_biaya()
	{
		return $this->db->query("SELECT SUM(biaya_rad) as total FROM pemeriksaan_radiologi");
	}
}