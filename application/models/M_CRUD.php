<?php

class M_CRUD extends CI_Model
{
	function get_data($table){
		return $this->db->get($table);
	}

	function get_data_limit($table, $limit, $start, $keyword = null)
	{ //khusus catalog
		if ($keyword) {
			// $this->db->select('*');
			// $this->db->from($table);
			// $this->db->join('inventory', 'items.item_code = inventory.item_code');
			$this->db->like('name', $keyword)->or_like('item_code', $keyword)->or_like('specification', $keyword);
		}
		return $this->db->get($table, $limit, $start);
	}

	function get_data_where($table, $where, $orderby = null, $sortKeys = null){		
		if ($orderby) {
			$this->db->order_by($orderby, $sortKeys);
		}
		return $this->db->get_where($table, $where);
	}

	function get_data_orwhere($table, $col1, $cond1, $col2, $cond2){		
		$this->db->where($col1, $cond1)->or_where($col2, $cond2);
		return $this->db->get($table);
	}

	public function get_join($table, $join, $matching, $join2 = null, $matching2 = null, $join3 = null, $matching3 = null)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join, $matching);

		if($join2) {
			$this->db->join($join2, $matching2);
		}

		if($join3) {
			$this->db->join($join3, $matching3);
		}

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

	function count_row($table) {
		return $this->db->get($table)->num_rows();
	}
}