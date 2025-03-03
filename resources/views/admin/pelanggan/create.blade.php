@extends('admin.app')

@section('content')
<div class="container">
    <h1>Tambahkan pelanggan</h1>
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
    <div class="form-group mb-3">
            <label for="no_telp" class="form-label">no_telp</label>
            <input type="text" name="no_telp" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection