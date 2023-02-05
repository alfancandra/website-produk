@extends('partials.template')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Beli Produk</p>
            <h1 class="mb-5 text-primary"></h1>
        </div>
        <div class="row">
            <div class="col-xxl-8">
                <form action="{{ route('produk.buy.action',$data->id) }}" method="post">
                @csrf
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
                        <td>Quantity</td>
                        <td>:</td>
                        <td><input type="number" name="qty" class="form-control" placeholder="Isi Berapa Jumlah Pembelian" required></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap" required></td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" class="form-control" placeholder="Isi Alamat Lengkap" required></td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone</td>
                        <td>:</td>
                        <td><input type="number" name="hp" class="form-control" placeholder="Isi Nomor Handphone" required></td>
                    </tr>
                    <tr>
                        <td>Pembayaran</td>
                        <td>:</td>
                        <td><input type="radio" name="pembayaran" id="gopay" value="GOPAY" required> <label for="gopay">GOPAY</label><br>
                            <input type="radio" name="pembayaran" id="ovo" value="OVO"> <label for="ovo">OVO</label><br>
                            <input type="radio" name="pembayaran" id="linkaja" value="LINKAJA"> <label for="linkaja">LINKAJA</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="submit" class="btn btn-primary btn-lg">Beli</button></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection