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
  <div class="continer-fluid banner-section">
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
            <h2 class="banner-title-text">Checkout</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container ">
    <form action="#">
      <div class="bg-white order shadow">
        <div class="row g-3">
          <div class="col-md-6">
            <h5>Produk </h5>
            <div class="barang d-flex justify-content-between">
              <div class="barang-left">
                <p class="mb-0">Lemper	</p>
                <p class="fw-light mt-0">Ketan dengan isian ayam	</p>
              </div>
              <div class="barang-left d-flex align-items-center">
                <p class="">Rp.15.000	</p>
              </div>
            </div>
            <div class="barang d-flex justify-content-between">
              <div class="barang-left">
                <p class="mb-0">Soto	</p>
                <p class="fw-light mt-0">Semangkut Soto Hangat	</p>
              </div>
              <div class="barang-left d-flex align-items-center">
                <p class="">Rp.10.000	</p>
              </div>
            </div>
            <hr>
            <div class="barang d-flex justify-content-between">
              <div class="barang-left">
                <p class="mb-0">Subtotal Produk	</p>
              </div>
              <div class="barang-left d-flex align-items-center">
                <p class="">Rp.30.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-3">
              <label class="form-label">Metode Pembayaran	</label>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Option</label>
                <select class="form-select" id="inputGroupSelect01">
                  <option selected>Cash</option>
                  <option value="1">OVO</option>
                  <option value="2">GOPAY</option>
                  <option value="3">DANA</option>
                </select>
              </div>
            </div>
            <hr>
            <div class="barang d-flex justify-content-between fw-light">
              <div class="barang-left">
                <p class="mb-0">Biaya Penanganan	</p>
              </div>
              <div class="barang-left d-flex align-items-center">
                <p class="">Rp.1.000</p>
              </div>
            </div>
            <div class="barang d-flex justify-content-between">
              <div class="barang-left">
                <p class="mb-0">Subtotal Produk	</p>
              </div>
              <div class="barang-left d-flex align-items-center">
                <p class="">Rp.30.000</p>
              </div>
            </div>
            <hr>
            <div class="barang d-flex justify-content-between ">
              <div class="barang-left">
                <p class="mb-0">Total Harga</p>
              </div>
              <div class="barang-left d-flex align-items-center">
                <p class="">Rp.31.000</p>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary w-100">Pesan</button>
            </div>
          </div>
        </div>
      </div>
    </form>
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
    </div>
  </div>
</footer>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    
  <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>