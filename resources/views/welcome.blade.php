@extends('layout.app')

@section('title')

@endsection

@section('content')
    <div class="continer-fluid banner-section">
        <div class="banner-container">
            <div class="background-image">
                <img src="{{ asset('assets/img/background1.jpeg') }}" class="image-banner">
            </div>
            <div class="layer-background">
                <div class="d-flex h-100 flex-column align-items-center justify-content-center">
                    <div class="banner-title">
                        <h1 class="banner-title-text">Kantin FTI UKSW</h1>
                    </div>
                    <div class="banner-description">
                        <h2 class="banner-description-text">
                            < Come hungry, leave happy />
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Makanan -->
    <div class="container">

        <h5 class="nama-menu mt-5 mx-5">Menu Makanan</h5>
        <div class="row  mx-4 mb-5 slick">
            @foreach ($menu as $row)
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="card-img-top card-gambar-produk p-3"
                            alt="Nama barang">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->name }}</h5>
                            <p class="card-text-description">Ketan dengan isian ayam</p>
                            <p class="card-text-description-stroke text-secondary">Harga lama : Rp{{ $row->price }}</p>
                            <p class="card-text">Harga : <span class="text-primary">Rp{{ $row->price }}<span></p>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Menu Makanan -->

        <!-- Menu Minuman -->
        <h5 class="nama-menu mt-5 mx-5">Menu Minuman</h5>
        <div class="row mx-4 mb-5 slick">
            <div class="col-md-4 col-sm-12">
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
            <div class="col-md-4 col-sm-12">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/esteh.jpg') }}" class="card-img-top card-gambar-produk p-3"
                        alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Es Teh</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/uc1000.jpeg') }}" class="card-img-top card-gambar-produk p-3"
                        alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Lemon Water</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
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
            <div class="col-md-4 col-sm-12">
                <div class="card h-100 ">
                    <img src="{{ asset('assets/img/sprite.jpeg') }}" class="card-img-top card-gambar-produk p-3"
                        alt="Nama barang">
                    <div class="card-body">
                        <h5 class="card-title">Sprite</h5>
                        <p class="card-text-description">Ketan dengan isian ayam</p>
                        <p class="card-text-description-stroke text-secondary">Harga : Rp.3.000,00</p>
                        <p class="card-text">Harga Lama : <span class="text-primary">Rp.2.000,00<span></p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
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
    </div>
@endsection
