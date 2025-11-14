@extends('layouts.app')

@section('content')

<div style="text-align:center;margin-bottom:22px;">
    <h2 style="font-family:'Oswald';font-size:34px;color:var(--neon);">WARMED77 — COLLECTION</h2>
    <p style="color:var(--muted);">Energy-driven performance drinks.</p>
</div>

{{-- WRAPPER AGAR TENGAH SEMPURNA --}}
<div style="
    display:flex;
    justify-content:center;
    width:100%;
">
    {{-- SHOWCASE CONTAINER --}}
    <div style="
        display:flex;
        gap:28px;
        overflow-x:auto;
        scroll-snap-type:x mandatory;
        padding-bottom:20px;
        padding-top:10px;
        justify-content:center;
        width:fit-content;
        max-width:100%;
    ">

        @foreach($menus as $m)
        <a href="{{ route('user.detail', $m->id) }}" class="product-card">

            <div class="can">
                <div class="spotlight"></div>

                <img src="{{ asset('storage/'.$m->foto) }}" alt="">

                <div class="info-overlay">
                    {{ $m->deskripsi ?? 'Energy boost · Instant focus · Premium crafted taste' }}
                </div>
            </div>

            <div class="label" style="text-align:center;">
                <div class="name">{{ strtoupper($m->nama_menu) }}</div>
                <div class="price">Rp {{ number_format($m->harga) }}</div>
            </div>

        </a>
        @endforeach

    </div>
</div>

@endsection
