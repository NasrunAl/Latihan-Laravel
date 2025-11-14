<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin • WARMED77</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300;500;700&display=swap');

        :root{
            --bg:#020202;
            --panel:rgba(8,12,8,0.65);
            --neon:#00ff66;
            --accent:#0aff8b;
            --muted:#b0d6b0;
        }

        body{
            margin:0;background:var(--bg);color:white;
            font-family:'Poppins';
        }

        /* LAYOUT */
        .admin-wrap{
            display:flex;gap:28px;padding:24px;min-height:100vh;
        }
        .sidebar{
            width:250px;background:rgba(0,0,0,0.55);
            border-radius:14px;padding:22px;
            border:1px solid rgba(0,255,102,0.1);
            box-shadow:0 0 22px rgba(0,255,102,0.15);
        }
        .main{
            flex:1;
        }

        .admin-logo{
            font-family:'Oswald';font-size:26px;color:var(--neon);
            text-align:center;margin-bottom:22px;
            text-shadow:0 0 12px rgba(0,255,102,0.6);
        }

        /* NAV */
        .nav-link{
            padding:10px 12px;margin-bottom:10px;
            color:var(--muted);border-radius:8px;
            display:block;
        }
        .nav-link:hover{
            background:rgba(0,255,102,0.08);color:white;
        }

        /* TOPBAR */
        .topbar{
            display:flex;justify-content:space-between;margin-bottom:18px;
        }
        .topbar-title{
            font-family:'Oswald';font-size:26px;color:var(--neon);
        }

        /* PANEL */
        .glass{
            background:var(--panel);
            border-radius:12px;
            padding:20px;
            border:1px solid rgba(0,255,102,0.08);
            box-shadow:0 4px 20px rgba(0,255,102,0.1);
        }

        /* BUTTONS */
        .btn-green{
            background:linear-gradient(90deg,var(--neon),var(--accent));
            color:black;font-weight:800;border:none;
            padding:10px 16px;border-radius:10px;
            box-shadow:0 0 18px rgba(0,255,102,0.32);
            text-decoration:none;
        }
        .btn-outline{
            padding:8px 14px;border-radius:8px;
            border:1px solid rgba(255,255,255,0.1);
            color:var(--muted);
            text-decoration:none;
        }

        /* TABLE */
        table{width:100%;border-collapse:collapse;}
        th{
            padding:12px;color:var(--neon);
            font-family:'Oswald';
            border-bottom:1px solid rgba(255,255,255,0.1);
        }
        td{
            padding:12px;color:white;border-bottom:1px solid rgba(255,255,255,0.06);
        }
        .tbl-img{
            width:90px;height:90px;object-fit:cover;border-radius:8px;
            border:1px solid rgba(255,255,255,0.1);
        }

    </style>
</head>
<body>

<div class="admin-wrap">

    <div class="sidebar">
        <div class="admin-logo">WARMED77 ADMIN</div>

        <a href="{{ route('menus.index') }}" class="nav-link">📋 Menu</a>
        <a href="{{ route('menus.create') }}" class="nav-link">➕ Tambah Menu</a>
        <a href="{{ route('user.produk') }}" class="nav-link">🛒 Lihat Produk User</a>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Menu Management</div>
            <a href="{{ route('menus.create') }}" class="btn-green">+ Tambah Menu</a>
        </div>

        <div class="glass">
            @yield('content')
        </div>
    </div>

</div>

</body>
</html>
