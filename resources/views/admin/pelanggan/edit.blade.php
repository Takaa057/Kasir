@extends('admin.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $barang->nama }}" required>
        </div>
        <div class="form-group">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" name="merek" class="form-control" value="{{ $barang->merek }}" required>
        </div>
        <div class="form-group">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" class="form-control">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategori as $data)
                    <option value="{{ $data->id }}" {{ $barang->kategori_id == $data->id ? 'selected' : '' }}>{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah_baik" class="form-label">Jumlah Barang dengan kondisi Baik</label>
            <input type="number" name="jumlah_baik" id="jumlah_baik" class="form-control" value="{{ $barang->jumlah_baik }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_buruk" class="form-label">Jumlah Barang dengan kondisi Buruk</label>
            <input type="number" name="jumlah_buruk" id="jumlah_buruk" class="form-control" value="{{ $barang->jumlah_buruk }}" required>
        </div>
        <div class="form-group">
            <label for="lokasi_id" class="form-label">Lokasi</label>
            <select name="lokasi_id" class="form-control" id="">
                <option value="">-- Masukkan Lokasi --</option>
                @foreach ($lokasi as $data)
                    <option value="{{ $data->id }}" {{ $barang->lokasi_id == $data->id ? 'selected' : '' }}>{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection