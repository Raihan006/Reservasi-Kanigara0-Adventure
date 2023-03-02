<?php

class AppController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("KatalogModel", "katalog_m");
    $this->load->model("InfoModel", "info_m");
    $this->load->model("CabangModel", "cabang_m");
    $this->load->model("ProdukModel", "produk_m");
  }

  public function index() {
    $id_cabang = $this->info_m->get_cabang_id();

    $data['cabang'] = $this->cabang_m->get_cabang_info($id_cabang);
    $data['katalog'] = $this->katalog_m->get_all($id_cabang);

    $this->load->view("templates/header");
    $this->load->view("templates/navbar");
    $this->load->view("app/landing", $data);
    $this->load->view("templates/footer");
  }

  public function detail($id) {
    $id_cabang = $this->info_m->get_cabang_id();
    $katalog = $this->katalog_m->get_detail($id_cabang, $id);
    $data['katalog'] = $katalog;
    $data['gambar_produk'] = $this->produk_m->get_gambar($katalog['id_produk']);

    $this->load->view("templates/header");
    $this->load->view("templates/navbar");
    $this->load->view("app/product_detail", $data);
    $this->load->view("templates/footer");
  }
}