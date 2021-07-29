<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/slick/slick.css">
  <link rel="stylesheet" href="assets/slick/slick-theme.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Order Kantin FTI</title>
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
        <img src="assets/img/background1.jpeg" class="image-banner-order">
      </div>
      <div class="layer-background-order">
        <div class="d-flex h-100 flex-column align-items-center justify-content-center">
          <div class="banner-icon-img">
            <img src="/assets/img/uksw.png" alt="UKSW" class="icon-img">
            <img src="/assets/img/fti.png" alt="FTI" class="icon-img">
            <img src="/assets/img/lk.png" alt="LK" class="icon-img">
          </div>
          <div class="banner-title">
            <h2 class="banner-title-text">Pemesanan</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container ">
      <div class="bg-white order shadow">
    <!-- Order top -->
      <div class="order-top mt-2 d-flex justify-content-between">
        <div class="col-md-4 col-lg-4">
            <img src="/assets/img/resep-kue-lemper-ayam.jpg" alt="Lemper" class="order-img">
        </div>
        <div class="col-md-7 col-lg-7 order-detail">
            <div class="order-detail-top">
                <div class="order-detail-title">
                    <h2 class="order-detail-title-text">Lemper</h2>
                </div>
                <div class="order-detail-description">
                    <p class="order-detail-description-text">Ketan dengan isian ayam</p>
                </div>
            </div>
            <div class="order-detail-bottom mb-0 ">
                <div class="order-detail-price-strike">
                    <p class="order-detail-price-strike-text text-secondary">Harga : <span>Rp.2000,00</span></p>
                </div>
                <div class="order-detail-price ">
                    <p class="order-detail-price-text">Harga : <span class="text-primary">Rp.2000,00</span></p>
                </div>
            </div>
        </div>
      </div>
    <!-- Order middle -->
    <form>
        <div class="order-middle mt-5 d-flex justify-content-between">
            <div class="col-md-4 col-lg-4 ">
                <h4> <strong> Jumlah</strong></h4>
            </div>
            <div class="col-md-7 col-lg-7">
                
                  <div class="input-group jumlah">
                    <button type="button" onclick="decrement()"  class="btn btn-primary" > - </button>
                    <input type="number" step="1" max="100" value="1" name="jumlah" class="form-control form-control-sm" id="jumlah" />
                    <button type="button" onclick="increment()"  class="btn btn-primary"> + </button>
                  </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 shadow mt-2"> <h5>Pesan </h5></button>
    </form>
    </div>
  </div>
  <footer class="bg-primary text-white text-center text-lg-start">
  <div class="container p-4">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">kantin fti</h5>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0 d-flex justify-content-around">
        <img src="/assets/img/uksw.png" alt="UKSW" class="icon-footer">
        <img src="/assets/img/fti.png" alt="FTI" class="icon-footer">
        <img src="/assets/img/lk.png" alt="LK" class="icon-footer">
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0 ">
        <ul class="list-unstyled mb-0 float-end">
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
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
    
  <script src="assets/slick/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>