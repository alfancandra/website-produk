@extends('admin.partials.template')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div id="alert" class="alert alert-success alert-block mb-3">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ $message }}
                        </div>
                    @endif
                    <h4 class="card-title">Edit Data User</h4>
                    <p class="card-description">
                        Form ini digunakan untuk Edit User
                    </p>
                    <form action="{{ route('adm.user.update',$data->id) }}" method="post" class="forms-sample">
                    @method('put')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="exampleInputName1" placeholder="Input Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Username</label>
                            <input type="test" name="username" value="{{ $data->username }}" class="form-control" id="exampleInputEmail3" placeholder="Input Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="USER" {{ $data->role == 'USER' ? 'selected' : '' }}>USER</option>
                                <option value="ADMIN" {{ $data->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                            </select>
                        </div>
                        <span class="text-danger">Isi Jika ingin mengubah password</span>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Input Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword4" placeholder="Input Password Confirmation">
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{ route('adm.user.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush