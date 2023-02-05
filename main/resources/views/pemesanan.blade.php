@extends('partials.template')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Pemesanan</p>
            <h1 class="mb-5 text-primary"></h1>
        </div>
        <div class="row">
            <div class="col">
                @if ($message = Session::get('success'))
                    <div id="alert" class="alert alert-success alert-block mb-3">
                        {{ $message }}
                    </div>
                @endif
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Nama Produk</td>
                        <td>Qty</td>
                        <td>Total Harga</td>
                        <td>Status</td>
                        <td>Tanggal</td>
                    </tr>
                    @foreach ($data as $key => $item)                        
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->qty * $item->harga }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection