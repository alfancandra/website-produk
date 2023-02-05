@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div id="alert" class="alert alert-success alert-block mb-3">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div id="alert" class="alert alert-danger alert-block mb-3">
                            {{ $message }}
                        </div>
                    @endif
                    <h4 class="card-title">Data Pemesanan</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">
                                        No
                                    </th>
                                    <th>
                                        Nama Produk
                                    </th>
                                    <th>
                                        Qty
                                    </th>
                                    <th>
                                        Nama Pemesan
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    <th>
                                        Set Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->nama_pemesan }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td><a href="{{ route('adm.pemesanan.show',$item->id) }}" class="btn btn-primary">Detail</a>
                                        </td>
                                        <td> 
                                            @if($item->status == 'PENDING')
                                            <a href="{{ route('adm.pemesanan.set',['id'=>$item->id, 'status'=>'DIPROSES']) }}" class="btn btn-warning">DIPROSES</a>
                                            <a href="{{ route('adm.pemesanan.set',['id'=>$item->id, 'status'=>'CANCEL']) }}" class="btn btn-danger">CANCEL</a>
                                            @elseif($item->status == 'DIPROSES')
                                            <a href="{{ route('adm.pemesanan.set',['id'=>$item->id, 'status'=>'DIKIRIM']) }}" class="btn btn-primary">DIKIRIM</a>
                                            <a href="{{ route('adm.pemesanan.set',['id'=>$item->id, 'status'=>'CANCEL']) }}" class="btn btn-danger">CANCEL</a>
                                            @elseif($item->status == 'DIKIRIM')
                                            <a href="{{ route('adm.pemesanan.set',['id'=>$item->id, 'status'=>'SUKSES']) }}" class="btn btn-success">SUKSES</a>
                                            @else 
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
