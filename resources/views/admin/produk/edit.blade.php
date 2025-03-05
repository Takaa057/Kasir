@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Edit produk</h1>

                <form action="{{ route('produk.update', $produk->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" value="{{ $produk->nama }}" name="nama">
                    </div>
                    
                    <div class="form-group">
                        <label for="harga" class="form-label">harga</label>
                        <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="stok" class="form-label">stok</label>
                        <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
                </form>
                </div>
            </div>
        </div>
@endsection