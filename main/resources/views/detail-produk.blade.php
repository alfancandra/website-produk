@extends('partials.template')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">{{ $data->nama }}</p>
            <h1 class="mb-5 text-primary"></h1>
        </div>
        <div class="row">
            <div class="col"><img class="rounded" src="{{ asset('images/'.$data->foto) }}" width="300px" /></div>
            <div class="col">
                <table class="table">
                    <tr>
                        <td>Nama Produk</td>
                        <td>:</td>
                        <td>{{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <td>Harga Produk</td>
                        <td>:</td>
                        <td>{{ $data->harga }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Produk</td>
                        <td>:</td>
                        <td>{{ $data->deskripsi }}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><a href="{{ route('produk.buy',$data->id) }}" class="btn btn-primary btn-lg">Beli</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection