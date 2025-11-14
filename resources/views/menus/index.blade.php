@extends('layouts.admin')

@section('content')

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($menus as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td style="color:var(--neon); font-family:'Oswald';">
                {{ $m->nama_menu }}
            </td>

            <td>
                @if($m->foto)
                <img src="{{ asset('storage/'.$m->foto) }}" class="tbl-img">
                @endif
            </td>

            <td>Rp {{ number_format($m->harga) }}</td>

            <td style="max-width:300px; color:var(--muted);">
                {{ $m->deskripsi }}
            </td>

            <td>
                <a href="{{ route('menus.edit', $m->id) }}" class="btn-outline">Edit</a>

                <form action="{{ route('menus.destroy', $m->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn-outline" style="color:red;border-color:red;"
                        onclick="return confirm('Yakin hapus produk?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection
