@extends('admin.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="h4">Selamat Datang {{ Auth::user()->name }}</h1>
                <div class="mb-3">
                    <p>Tambahkan konten kamu disini</p>
                    <button class="btn btn-sm btn-primary">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection