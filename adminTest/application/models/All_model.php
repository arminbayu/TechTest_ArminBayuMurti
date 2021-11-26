<?php

/**
 *
 */
class All_model extends CI_Model {

  public function get_data($where, $table, $order = 0) {
    $this->db->from($table);
    $this->db->where($where);
    if ($order) {
      $this->db->order_by('created_on','DESC');
    }
    return $this->db->get()->result();
  }

  public function get_data_count_by($where, $table) {
    $this->db->from($table);
    $this->db->where($where);
    // $this->db->order_by('created_on','DESC');
    return $this->db->get()->num_rows();
  }

  public function get_by($table, $where) {
    return $this->db->from($table)->where($where)->get()->row();
  }

  public function c_insert($table, $data) {
    $this->db->insert($table, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }

  public function c_update($table, $data, $where) {
    $this->db->where($where);
    return $this->db->update($table, $data);
  }

  public function c_find_by($table, $where) {
    $this->db->from($table);
    $this->db->where($where);
    return $this->db->get()->row();
  }

  public function c_find_all_by($table, $where) {
    $this->db->from($table);
    $this->db->where($where);
    return $this->db->get()->result();
  }

  public function get_by_result($table, $where) {
    return $this->db->from($table)->where($where)->get()->result();
  }

  public function update($where, $data, $table) {
    $this->db->where($where);
    return $this->db->update($table, $data);
  }

  public function insert($data, $table) {
    return $this->db->insert($table, $data);
  }

  public function insert_notif($table, $data) {
    return $this->db->insert($table, $data);
  }

  public function c_insert_batch($table, $data) {
    return $this->db->insert_batch($table, $data);
  }

  public function delete($where, $table) {
    $this->db->where($where);
    return $this->db->delete($table);
  }

	public function get_id($table){
		$result   = $this->db->get($table)->num_rows();
		$result += 1;

		return $result ;
	}

  public function get_all_by($table, $where, $order = null) {
    $this->db->from($table);
    $this->db->where($where);
    if ($order) {
      $this->db->order_by($order);
    }
    return $this->db->get()->result();
  }

  public function get_all_by_group($table, $where, $group = null) {
    $this->db->from($table);
    $this->db->where($where);
    if ($group) {
    $this->db->group_by($group);
    }
    return $this->db->get()->result();
  }

}

 ?>
