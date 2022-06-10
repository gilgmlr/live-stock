<?php

class M_CRUD extends CI_Model
{
	function get_data($table){
		return $this->db->get($table);
	}

	function get_data_where($table, $where){		
		return $this->db->get_where($table, $where);
	}

	function get_data_orwhere($table, $col1, $cond1, $col2, $cond2){		
		$this->db->where($col1, $cond1)->or_where($col2, $cond2);
		return $this->db->get($table);
	}

	public function get_join($table, $join, $matching)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join, $matching);
		$query = $this->db->get();

		return $query;
	}

	public function get_join2($table, $join1, $matching1, $join2, $matching2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join1, $matching1);
		$this->db->join($join2, $matching2);
		$query = $this->db->get();

		return $query;
	}

	public function get_join3($table, $join1, $matching1, $join2, $matching2, $join3, $matching3)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join1, $matching1);
		$this->db->join($join2, $matching2);
		$this->db->join($join3, $matching3);
		$query = $this->db->get();

		return $query;
	}

	function get_data_sort($table, $orderby, $sortKeys){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($orderby, $sortKeys);

		$query = $this->db->get();
		return $query;
	}
 
	function input_data($table, $data){
		$this->db->insert($table, $data);
	}
 
	function delete_data($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function update_data($table, $data, $where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function get_total($table) {
		return $this->db->get($table)->num_rows();
	}
}