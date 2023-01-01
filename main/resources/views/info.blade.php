@extends('partials.template')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Info</p>
            <h1 class="mb-5 text-primary"></h1>
        </div>
        <div class="row">
            <div class="col text-center">
                <h1>JAJANKU</h1>
                <br>
                <a href="https://goo.gl/maps/mLYQgpukhQqd19Y79" target="_blank">
                    <span>Jl. Medan Merdeka Sel. 5, RT.5/RW.2, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</span>
                </a>
            </div>
            <div class="col">
                Jajanku adalah platform penjualan jajanan berbasis website yang berdiri pada
                bulan Desember 2022. Platform Jajanku ini bertujuan untuk memudahkan masyarakat
                dalam berbelanja khususnya jajanan snack seperti Top, Beng beng, oreo dan lain lain.
                <br><br>
                <a href="https://wa.me/628882392000" target="_blank">
                    <img src="{{ asset('assets/img/wa.png') }}" style="margin-right: 20px" width="50px"/> +62888-2392-0000
                </a>
                <br><br>
                <a href="https://wa.me/628882392000" target="_blank">
                    <img src="{{ asset('assets/img/ig.png') }}" style="margin-right: 20px" width="50px"/> Jajanku
                </a>
            </div>
        </div>
    </div>
</div>
@endsection