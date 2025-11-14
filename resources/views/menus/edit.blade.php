@extends('layouts.admin')

@section('content')

<form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="text-light">Nama Menu</label>
        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="text-light">Harga</label>
        <input type="number" name="harga" value="{{ $menu->harga }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="text-light">Deskripsi</label>
        <textarea name="deskripsi" rows="5" class="form-control">{{ $menu->deskripsi }}</textarea>
    </div>

    <div class="mb-3">
        <label class="text-light">Foto (opsional)</label>
        <input type="file" name="foto" class="form-control">
        @if($menu->foto)
            <img src="{{ asset('storage/'.$menu->foto) }}" width="120" class="mt-2 rounded">
        @endif
    </div>

    <button class="btn btn-success">Update</button>
</form>

@endsection
