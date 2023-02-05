@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pemesanan</h4>
                    <div class="form-group">
                        <label for="exampleInputName1">Nama produk</label>
                        <input type="text" value="{{ $data->nama_produk }}" readonly class="form-control" id="exampleInputName1" placeholder="Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Harga Produk</label>
                        <input type="number" value="{{ $data->harga }}" readonly class="form-control" id="exampleInputEmail3" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Quantity</label>
                        <input type="text" value="{{ $data->qty }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Nama Lengkap</label>
                        <input type="text" value="{{ $data->nama }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Alamat Lengkap</label>
                        <input type="text" value="{{ $data->alamat }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Nomor Handphone</label>
                        <input type="text" value="{{ $data->hp }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Pembayaran</label>
                        <input type="text" value="{{ $data->pembayaran }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Tanggal</label>
                        <input type="text" value="{{ $data->created_at }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Status</label>
                        <input type="text" value="{{ $data->status }}" readonly class="form-control" id="exampleInputPassword4" placeholder="Deskripsi">
                    </div>
                    <a class="btn btn-light" href="{{ route('adm.pemesanan.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush