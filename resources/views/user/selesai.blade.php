@extends('layouts.app')

@section('content')

<style>
    .done-box{
        max-width: 600px;
        margin: auto;
        padding: 35px;
        background: rgba(0, 0, 0, 0.45);
        border-radius: 18px;
        border: 1px solid rgba(0,255,102,0.15);
        backdrop-filter: blur(6px);
        box-shadow: 0 0 28px rgba(0,255,102,0.12);
        animation: fadeIn .7s ease-out;
        text-align: center;
    }

    .done-title{
        font-family: 'Oswald';
        font-size: 34px;
        color: var(--neon);
        margin-bottom: 10px;
        letter-spacing: 1px;
        text-shadow:
            0 0 10px rgba(0,255,102,0.4),
            0 0 20px rgba(0,255,102,0.3);
    }

    .done-text{
        font-size: 16px;
        color: var(--muted);
        margin-bottom: 22px;
        line-height: 1.6;
    }

    .btn-back{
        padding: 10px 16px;
        border-radius: 10px;
        border: 2px solid var(--neon);
        font-weight: 700;
        color: var(--neon);
        text-decoration: none;
        transition: .25s;
    }

    .btn-back:hover{
        background: var(--neon);
        color: black;
        box-shadow: 0 0 18px rgba(0,255,102,0.5);
    }

    @keyframes fadeIn{
        from{ opacity:0; transform:translateY(20px); }
        to{ opacity:1; transform:translateY(0); }
    }
</style>

<div class="done-box">
    <h1 class="done-title">Pesanan Berhasil!</h1>

    <p class="done-text">
        Terima kasih telah melakukan pemesanan.
        <br>
        Kami akan segera menghubungi Anda via WhatsApp.
        <br><br>
        Tetap semangat dengan <strong>WARMED77 Energy Drink!</strong>
    </p>

    <a href="{{ route('user.produk') }}" class="btn-back">← Kembali ke Produk</a>
</div>

@endsection
