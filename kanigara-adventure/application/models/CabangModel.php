<?php

class CabangModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_cabang_info($id) {
    return $this->db->get_where('cabang', ['id' => $id])->row_array();
  }
}