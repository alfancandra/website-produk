@extends('partials.template')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">About</p>
            <h1 class="mb-5 text-primary"></h1>
        </div>
        <div class="row g-5 align-items-end">
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/produk-1.png') }}">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/produk-2.jpg') }}">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/produk-3.png') }}">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/produk-5.webp') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                <h1 class="mb-4 text-primary">Jajanku Adalah Platform Penjualan jajanan</h1>
                <p class="mb-4">Kami menyediakan platform pernjualan jajanan yang berfungsi untuk memudahkan jual beli
                    tanpa harus keluar rumah</p>
                <div class="row g-5 pt-2 mb-5">
                    <div class="col-sm-6">
                        <img class="img-fluid mb-4" src="img/service.png" alt="">
                        <h5 class="mb-3">Murah</h5>
                        <span>Produk dengan harga murah dan langsung dari distribusi</span>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid mb-4" src="img/product.png" alt="">
                        <h5 class="mb-3">Terjangkau</h5>
                        <span>Produk Terjangkau dan bisa dikirim seluruh Indonesia</span>
                    </div>
                </div>
                <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('produk') }}">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
@endsection