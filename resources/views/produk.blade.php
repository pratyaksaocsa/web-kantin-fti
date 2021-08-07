@extends('layout.app')

@section('content')
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
  @endsection
