<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /* ================================
        ADMIN — CRUD
    ================================== */

    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'harga'     => 'required|numeric',
            'foto'      => 'nullable|image'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('menu', 'public');
        }

        Menu::create($data);
        return redirect()->route('menus.index')->with('success','Menu berhasil ditambah');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('menu', 'public');
        }

        $menu->update($data);
        return redirect()->route('menus.index')->with('success','Menu berhasil diupdate');
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();
        return redirect()->route('menus.index')->with('success','Menu berhasil dihapus');
    }


    /* ================================
        USER — SHOW PRODUK
    ================================== */

    public function userProduk()
    {
        $menus = Menu::all();
        return view('user.produk', compact('menus'));
    }

    public function userDetail($id)
    {
        $menu = Menu::findOrFail($id);
        return view('user.detail', compact('menu'));
    }


    /* ================================
        CHECKOUT
    ================================== */

    public function checkoutForm($id)
    {
        $menu = Menu::findOrFail($id);
        return view('user.checkout', compact('menu'));
    }

    public function checkoutProcess(Request $request)
    {
        return redirect()->route('user.selesai');
    }
}
