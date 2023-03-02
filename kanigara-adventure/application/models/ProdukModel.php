<?php

class ProdukModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_gambar($id_produk) {
    return $this->db->get_where("foto_produk", ["id_produk" => $id_produk])->result_array();
  }
}