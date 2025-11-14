<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>warmed77 — Energy Drinks</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300;500;700&display=swap');

        :root{
            --bg: #020202;
            --panel: rgba(8,12,8,0.62);
            --glass: rgba(10,20,10,0.55);
            --neon: #00ff66;
            --accent: #0aff8b;
            --text-light: #d3ffd3;
            --muted: #a0cfa0;
        }

        body{
            margin:0;
            background:#020202;
            font-family:'Poppins';
            color:white;
            overflow-x:hidden;
        }

        /* ===== ANIMASI BG ===== */
        .neon-bg{ position:fixed; inset:0; z-index:-1; }
        .neon-line{
            position:absolute; width:120%; height:160%;
            left:-10%; top:-30%;
            transform:rotate(8deg);
            background:
                radial-gradient(circle at 20% 30%, rgba(0,255,102,0.045), transparent 7%),
                linear-gradient(90deg, rgba(0,255,102,0.05), rgba(0,255,102,0.01));
            filter: blur(24px);
            animation: floatSlow 12s ease-in-out infinite;
        }
        .neon-line:nth-child(2){ left:-20%; top:-15%; animation-duration:14s; }
        .neon-flash{
            position:absolute;width:30px;height:120%;
            right:6%;top:-12%;
            background: linear-gradient(180deg, rgba(0,255,102,0.32), transparent 40%);
            transform:skewX(-18deg);
            filter:blur(6px);
            animation: flashPulse 6s infinite;
        }

        @keyframes floatSlow{
            0%{ transform:translateY(0) rotate(8deg); }
            50%{ transform:translateY(-40px) rotate(8deg); }
            100%{ transform:translateY(0) rotate(8deg); }
        }

        @keyframes flashPulse{
            0%{ opacity:0; } 10%{ opacity:1; }
            50%{ opacity:.2; } 100%{ opacity:0; }
        }

        /* ===== LOGO MENYALA (DITAMBAHKAN) ===== */
        .brand-title{
            font-family:'Oswald';
            color:var(--neon);
            font-size:26px;
            text-shadow:
                0 0 8px rgba(0,255,102,0.6),
                0 0 14px rgba(0,255,102,0.4),
                0 0 22px rgba(0,255,102,0.3);
            animation: glowPulse 2.3s ease-in-out infinite alternate;
        }
        @keyframes glowPulse{
            0%{
                text-shadow:
                    0 0 6px rgba(0,255,102,0.3),
                    0 0 12px rgba(0,255,102,0.2);
            }
            100%{
                text-shadow:
                    0 0 16px rgba(0,255,102,1),
                    0 0 28px rgba(0,255,102,0.9);
            }
        }

        /* NAV */
        .w-nav{
            padding:18px 28px;
            background:rgba(0,0,0,0.35);
            border-bottom:1px solid rgba(0,255,102,0.12);
            backdrop-filter:blur(6px);
            display:flex;justify-content:space-between;align-items:center;
        }
        .brand-sub{ color:var(--muted);font-size:11px;margin-top:-6px; }

        .btn-ghost{
            padding:8px 14px;border-radius:8px;
            border:1px solid rgba(255,255,255,0.09);
            color:var(--muted);text-decoration:none;
        }
        .btn-ghost:hover{ border-color:var(--neon);color:white; }

        .btn-cta{
            padding:10px 16px;border-radius:10px;
            background:linear-gradient(90deg,var(--neon),var(--accent));
            font-weight:800;text-decoration:none;color:black;
            box-shadow:0 0 20px rgba(0,255,102,0.32);
        }

        .content-wrap{ padding:34px 20px; max-width:1300px; margin:auto; }

        /* ===== PRODUK CARD (tetap sama) ===== */

        .product-card{
            width:260px;
            text-decoration:none;color:white;
            display:flex;
            flex-direction:column;
            justify-content:flex-start;
            align-items:center;
            gap:14px;
            transform-origin:center bottom;
            transition:.35s;
            animation:floatCard 4s ease-in-out infinite;
        }

        @keyframes floatCard{
            0%{ transform:translateY(0);}
            50%{ transform:translateY(-10px);}
            100%{ transform:translateY(0);}
        }

        .can{
            width:200px;height:320px;
            border-radius:20px;
            background:#050505;
            border:1px solid rgba(255,255,255,0.05);
            overflow:hidden;
            position:relative;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .can img{
            width:100%;
            height:100%;
            object-fit:cover;
            object-position:center;
        }

        .product-card:hover{
            transform:translateY(-20px) scale(1.08);
        }

        .product-card:hover .can{
            box-shadow:0 28px 80px rgba(0,255,102,0.32);
        }

        .spotlight{
            position:absolute; top:-60px; left:50%;
            width:240px; height:140px;
            transform:translateX(-50%);
            background:radial-gradient(circle, rgba(0,255,102,.25), transparent 50%);
            filter:blur(20px);
        }

        .info-overlay{
            position:absolute; bottom:0; left:0; right:0;
            padding:10px;
            background:linear-gradient(180deg, transparent, rgba(0,0,0,0.85));
            color:var(--muted);
            font-size:13px;
            opacity:0; transition:.35s;
        }
        .product-card:hover .info-overlay{ opacity:1; }

        .name{
            font-family:'Oswald';
            font-size:20px;
            color:var(--neon);
            text-align:center;
            letter-spacing:1px;
        }

        .price{
            color:var(--text-light);
            font-size:15px;
        }

        .glass{
            background:var(--glass);
            padding:20px;border-radius:12px;
            border:1px solid rgba(255,255,255,0.08);
            backdrop-filter:blur(6px);
        }

        .btn-buy{
            border:2px solid var(--neon);
            padding:10px 16px;
            color:var(--neon);
            font-weight:800;
            border-radius:10px;text-decoration:none;
        }
        .btn-buy:hover{ background:var(--neon);color:black; }

    </style>
</head>

<body>

<div class="neon-bg">
    <div class="neon-line"></div>
    <div class="neon-line"></div>
    <div class="neon-flash"></div>
</div>

<header class="w-nav">
    <div>
        <div class="brand-title">WARMED77</div> <!-- LOGO YANG MENYALA -->
        <div class="brand-sub">Premium Energy Drinks</div>
    </div>

    <div style="display:flex;gap:12px;">
        <a href="{{ route('user.produk') }}" class="btn-ghost">Shop</a>
        <a href="{{ route('menus.index') }}" class="btn-ghost">Admin</a>
        <a href="{{ route('user.produk') }}" class="btn-cta">Order Now</a>
    </div>
</header>

<main class="content-wrap">
    @yield('content')
</main>

</body>
</html>
