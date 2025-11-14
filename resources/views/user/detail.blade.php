@extends('layouts.app')

@section('content')

<div style="max-width:1100px;margin:auto;display:flex;gap:34px;flex-wrap:wrap;">

    <div style="flex:0 0 380px;">
        <div class="glass">
            <img src="{{ asset('storage/'.$menu->foto) }}" 
                 style="width:100%;height:450px;object-fit:cover;border-radius:12px;">
        </div>
    </div>

    <div style="flex:1;">
        <div class="glass">

            <h1 style="font-family:'Oswald';color:var(--neon);margin:0;">
                {{ $menu->nama_menu }}
            </h1>

            <h3 style="color:var(--text-light);">Rp {{ number_format($menu->harga) }}</h3>

            <p style="color:var(--muted);line-height:1.6;">
                {{ $menu->deskripsi ?? 'Minuman energi premium dengan rasa kuat dan efek boost maksimal untuk aktivitas intens.' }}
            </p>

            <div style="display:flex;gap:12px;margin-top:16px;">
                <a href="{{ route('checkout.form', $menu->id) }}" class="btn-buy">Checkout</a>
                <a href="{{ route('user.produk') }}" class="btn-ghost">Back</a>
            </div>

        </div>
    </div>

</div>

@endsection
