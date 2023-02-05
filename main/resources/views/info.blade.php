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
                <h1>{{ $data->nama }}</h1>
                <br>
                <a href="{{ $data->alamat_link }}" target="_blank">
                    <span>{{ $data->alamat }}</span>
                </a>
            </div>
            <div class="col">
                {{ $data->deskripsi }}
                <br><br>
                <a href="https://wa.me/{{ $data->whatsapp }}" target="_blank">
                    <img src="{{ asset('assets/img/wa.png') }}" style="margin-right: 20px" width="50px"/> {{ $data->whatsapp }}
                </a>
                <br><br>
                <a href="https://instagram.com/{{ $data->instagram }}" target="_blank">
                    <img src="{{ asset('assets/img/ig.png') }}" style="margin-right: 20px" width="50px"/> {{ $data->instagram }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection