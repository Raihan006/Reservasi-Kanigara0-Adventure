<div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="http://localhost/kanigara-adventure-admin/uploads/image/<?= $katalog['foto_produk'] ?>">
                <img src="http://localhost/kanigara-adventure-admin/uploads/image/<?= $katalog['foto_produk'] ?>" width="425px" />
              </div>
              <?php foreach($gambar_produk as $gambar): ?>
                <div data-thumb="http://localhost/kanigara-adventure-admin/uploads/image/<?= $gambar['url_gambar'] ?>">
                  <img src="http://localhost/kanigara-adventure-admin/uploads/image/<?= $gambar['url_gambar'] ?>" width="425px" />
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <!-- <h5>previous <span>|</span> next</h5> -->
            <h3><?= $katalog['nama_produk'] ?></h3>
            <h2>Rp <?= number_format($katalog['harga'], 0, ',', '.') ?> / 3 Hari</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Merk</span> : <?= $katalog['merk'] ?></a>
              </li>
              <li>
                <a href="#"> <span>Sisa</span> : <?= $katalog['jumlah'] ?></a>
              </li>
            </ul>
            <p>
              <?= $katalog['detail'] ?>
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <!-- <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div> -->
              <a href="https://wa.me/6281254945805?text=halo%20admin%20kanigara,%20saya%20ingin%20booking%20<?= $katalog['nama_produk'] ?>%20[<?= $katalog['kode_produk'] ?>]" class="btn_3">Hubungi Kami</a>
              <!-- <a href="#" class="like_us"> <i class="ti-heart"></i> </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>