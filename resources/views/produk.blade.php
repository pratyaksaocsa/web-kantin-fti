<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Kantin FTI | Checkout Page</title>
</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light custom-navbar-background">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-uppercase" href="#">Kantin FTI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid banner-section">
    <div class="banner-container-order">
      <div class="background-image-order">
        <img src="{{ asset('assets/img/background1.jpeg') }}" class="image-banner-order">
      </div>
      <div class="layer-background-order">
        <div class="d-flex h-100 flex-column align-items-center justify-content-center">
          <div class="banner-icon-img">
            <img src="{{ asset('assets/img/uksw.png') }}" alt="UKSW" class="icon-img">
            <img src="{{ asset('assets/img/fti.png') }}" alt="FTI" class="icon-img">
            <img src="{{ asset('assets/img/lk.png') }}" alt="LK" class="icon-img">
          </div>
          <div class="banner-title">
            <h2 class="banner-title-text">Menu</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Menu -->
  <div class="container ">
    <!-- <div class="bg-white order shadow"> -->
        <!-- Menu Makanan -->
        <h5 class="nama-menu mt-5 mx-5">Menu Makanan</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-sm-1 g-4 mx-4 mb-5">
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Indomie Goreng</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/nsagor.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/risol.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Risoles</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/roti.jpeg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Roti</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/soto.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Soto</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/tahu_isi.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Tahu Isi</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Makanan -->

        <!-- Menu Minuman -->
        <h5 class="nama-menu mt-5 mx-5">Menu Minuman</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-sm-1 g-4 mx-4 mb-5">
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/kopi.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Kopi</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/esteh.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Es Teh</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/uc1000.jpeg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Lemon Water</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/aqua.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Air Mineral</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/sprite.jpeg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Sprite</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/susu.jpg') }}" class="card-img-top card-gambar-produk p-3" alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Susu</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Minuman -->
    <!-- </div> -->
  </div>
  <footer class="bg-primary text-white text-center text-lg-start">
  <div class="container p-4">
    <div class="row align-items-center ">
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0 text-left">
        <h5 class="text-uppercase left">kantin fti</h5>
      </div>
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0 d-flex justify-content-around ">
        <img src="{{ asset('assets/img/uksw.png') }}" alt="UKSW" class="icon-footer">
        <img src="{{ asset('assets/img/fti.png') }}" alt="FTI" class="icon-footer">
        <img src="{{ asset('assets/img/lk.png') }}" alt="LK" class="icon-footer">
      </div>
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0 list-menu">
        <ul class="list-unstyled mb-0 float-lg-end float-md-end float-sm-center float-xs-center">
          <li>
            <a href="#" class="footer-link">Menu 1</a>
          </li>
          <li>
            <a href="#" class="footer-link">Menu 2</a>
          </li>
          <li>
            <a href="#" class="footer-link">Menu 3</a>
          </li>
          <li>
            <a href="#" class="footer-link">Menu 4</a>
          </li>
          <li>
            <a href="#" class="footer-link">Menu 5</a>
          </li>
        </ul>
      </div>
    <!-- </div> -->
  </div>
</footer>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

  <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
