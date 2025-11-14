@extends('layouts.admin')

@section('content')

<form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="text-light">Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="text-light">Harga</label>
        <input type="number" name="harga" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="text-light">Deskripsi</label>
        <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label class="text-light">Foto Produk</label>
        <input type="file" name="foto" class="form-control" required>
    </div>

    <button class="btn-green">Simpan</button>
</form>

@endsection
