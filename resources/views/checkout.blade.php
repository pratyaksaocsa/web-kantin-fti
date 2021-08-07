@extends('layout.app')

@section('content')
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
          <h5>Produk</h5>
            <!--Produk 1-->
            <div class="row g-3 mb-3">
                <div class="col-md-4 col-lg-4 col-xs-6 col-sm-12 float-start">
                    <img src="{{ asset('assets/img/resep-kue-lemper-ayam.jpg') }}" alt="Lemper" class="checkout-img">
                </div>
                <div class="col-md-8">
                    <div class="barang d-flex justify-content-between">
                        <div class="barang-left">
                        <p class="mb-0">Lemper</p>
                        <p class="fw-light mt-0">Ketan dengan isian ayam</p>
                        </div>
                        <div class="barang-left d-flex align-items-center">
                        <p class="">Rp.15.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Produk 2-->
            <div class="row g-3">
                <div class="col-md-4 col-lg-4 col-xs-6 col-sm-12 float-start">
                    <img src="{{ asset('assets/img/soto.jpg') }}" alt="Soto" class="checkout-img">
                </div>
                <div class="col-md-8">
                    <div class="barang d-flex justify-content-between">
                        <div class="barang-left">
                            <p class="mb-0">Soto</p>
                            <p class="fw-light mt-0">Semangkuk soto hangat</p>
                        </div>
                        <div class="barang-left d-flex align-items-center">
                            <p class="">Rp.15.000</p>
                        </div>
                    </div>
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
          <div class="col-md-5.5">
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
@endsection
