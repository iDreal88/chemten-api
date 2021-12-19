@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Edit User</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user['name'] }}" required>
                </div>       
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $user['username'] }}" required>
                </div>          
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $user['email'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ $user['password'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Sekolah</label>
                    <input type="text" class="form-control" name="sekolah" value="{{ $user['sekolah'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Kota</label>
                    <input type="text" class="form-control" name="kota" value="{{ $user['kota'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $user['tanggal_lahir'] }}" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                    <a href="{{ URL::previous() }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection