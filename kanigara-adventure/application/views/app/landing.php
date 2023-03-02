<style>
  .img-size {
    width: 240px;
    height: 255.51px;
  }
</style>

<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="<?= base_url("assets/") ?>img/kanigara_logo.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Kanigara Adventure</h2>
                    <h3>Cabang <?= $cabang['nama'] ?></h3>
                    <div class="date_countdown">
                        <div id="timer">
                            <!-- <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div> -->
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product_list start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Katalog <span></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            <?php foreach($katalog as $data): ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="http://localhost/kanigara-adventure-admin/uploads/image/<?= $data['foto_produk'] ?>" class="img-size" alt="">
                                    <div class="single_product_text">
                                        <h4><?= $data['nama_produk'] ?></h4>
                                        <h6>Sisa <?= $data['jumlah'] ?></h6>
                                        <h5>Harga Rp <?= number_format($data['harga'], 0, ',', '.') ?> / 3 hari</h5>
                                        <a href="https://wa.me/6281254945805?text=halo%20admin%20kanigara,%20saya%20ingin%20booking%20<?= $data['nama_produk'] ?>%20[<?= $data['kode_produk'] ?>]" target="_blank" class="add_cart">+ hubungi kami</a>
                                        <a href="<?= base_url("product/detail/") . $data['id'] ?>" class="add_cart">+ detail</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_1.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_2.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_3.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_4.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_5.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_6.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_7.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="<?= base_url("assets/") ?>img/product/product_8.png" alt="">
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->