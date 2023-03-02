<?php

class KatalogModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all($id_cabang) {
    $query = "SELECT katalog.id, katalog.id_cabang, katalog.id_produk, produk.nama as nama_produk, produk.foto as foto_produk, katalog.jumlah, cabang.nama as nama_cabang, katalog.kode_produk, produk.detail, produk.foto, produk.harga FROM katalog JOIN produk ON katalog.id_produk = produk.id JOIN cabang ON katalog.id_cabang = cabang.id WHERE katalog.id_cabang = $id_cabang";

    return $this->db->query($query)->result_array();
  }

  public function get_detail($id_cabang, $id) {
    $query = "SELECT katalog.id, katalog.id_cabang, katalog.id_produk, produk.nama as nama_produk, produk.foto as foto_produk, katalog.jumlah, cabang.nama as nama_cabang, katalog.kode_produk, produk.detail, produk.merk, produk.harga FROM katalog JOIN produk ON katalog.id_produk = produk.id JOIN cabang ON katalog.id_cabang = cabang.id WHERE katalog.id_cabang = $id_cabang AND katalog.id = $id";

    return $this->db->query($query)->row_array();
  }
}