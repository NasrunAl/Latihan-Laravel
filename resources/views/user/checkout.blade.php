@extends('layouts.app')

@section('content')

<div class="glass" style="max-width:700px;margin:auto;">

    <h2 style="text-align:center;font-family:'Oswald';color:var(--neon);">CHECKOUT — WARMED77</h2>

    <p style="color:var(--text-light);">
        <b>{{ $menu->nama_menu }}</b><br>
        Harga: <span style="color:var(--neon);">Rp {{ number_format($menu->harga) }}</span>
    </p>

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf

        <input type="hidden" name="menu_id" value="{{ $menu->id }}">

        <label style="color:var(--muted);">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control mb-3"
               style="background:#0a0a0a;border:1px solid rgba(0,255,102,0.2);color:white;" required>

        <label style="color:var(--muted);">Alamat Lengkap</label>
        <textarea name="alamat" class="form-control mb-3"
                  style="background:#0a0a0a;border:1px solid rgba(0,255,102,0.2);color:white;" required></textarea>

        <label style="color:var(--muted);">No WhatsApp</label>
        <input type="text" name="nomor" class="form-control mb-3"
               style="background:#0a0a0a;border:1px solid rgba(0,255,102,0.2);color:white;" required>

        <button class="btn-buy w-100">Proses Pesanan</button>
    </form>

</div>

@endsection
