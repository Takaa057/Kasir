@extends('admin.app')

@section('content')
<div class="container">
    <h1>Edit pelanggan</h1>
    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pelanggan->alamat }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control" value="{{ $pelanggan->no_telp }}" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection