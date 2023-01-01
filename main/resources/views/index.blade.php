@extends('partials.template')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/hero-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <!-- <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-8 text-start">
                                        <p class="fs-4 text-white">Welcome to our dairy farm</p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">The Farm of Dairy products</h1>
                                        <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/hero-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <!-- <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8 text-end">
                                        <p class="fs-4 text-white">Welcome to our dairy farm</p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">Best Organic Dairy Products</h1>
                                        <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
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
    <!-- About End -->
@endsection
