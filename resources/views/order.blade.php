@extends('layout.app')

@section('title')
Order
@endsection

@section('content')
  <div class="continer-fluid banner-section">
    <div class="banner-container-order">
      <div class="background-image-order">
        <img src="assets/img/background1.jpeg" class="image-banner-order">
      </div>
      <div class="layer-background-order">
        <div class="d-flex h-100 flex-column align-items-center justify-content-center">
          <div class="banner-icon-img">
            <img src="{{ asset('assets/img/uksw.png') }}" alt="UKSW" class="icon-img">
            <img src="{{ asset('assets/img/fti.png') }}" alt="FTI" class="icon-img">
            <img src="{{ asset('assets/img/lk.png') }}" alt="LK" class="icon-img">
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
      <div class="order-top mt-2 row">
        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 float-start">
            <img src="{{ asset('assets/img/resep-kue-lemper-ayam.jpg') }}" alt="Lemper" class="order-img">
        </div>
        <div class="col-md-7 col-lg-7 order-detail float-end">
            <div class="order-detail-top mb-3">
                <div class="order-detail-title">
                    <h2 class="order-detail-title-text">Lemper</h2>
                </div>
                <div class="order-detail-description">
                    <p class="order-detail-description-text">Ketan dengan isian ayam</p>
                </div>
            </div>
            <div class="order-detail-bottom mb-0 ">
                <div class="order-detail-price-strike">
                    <p class="order-detail-price-strike-text text-secondary">Harga : <span>Rp 2.500,00</span></p>
                </div>
                <div class="order-detail-price ">
                    <p class="order-detail-price-text">Harga : <span class="text-primary">Rp 2.000,00</span></p>
                </div>
            </div>
        </div>
      </div>
    <!-- Order middle -->
    <form>
        <div class="order-middle row align-items-center">
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 float-start ">
              <input type="hidden" value="id_barang">

              <h4> <strong> Jumlah</strong></h4>
          </div>
          <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12  float-end">
            <div class="input-group jumlah">
              <button type="button" onclick="decrement()"  class="btn btn-primary" > - </button>
              <input type="number" step="1" min="0" max="100" value="1" name="jumlah" class="form-control" id="jumlah" />
              <button type="button" onclick="increment()"  class="btn btn-primary"> + </button>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 shadow mt-2"> <h5 class="btn-txt">Pesan </h5></button>
    </form>
    </div>
  </div>
  @endsection
