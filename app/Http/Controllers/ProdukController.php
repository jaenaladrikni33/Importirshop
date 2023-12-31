<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Member;
use Illuminate\Http\Request;

class Produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        $members = Member::all();
        //return $kategori;
        //return $member;
        return view('admin.produk', compact('kategoris', 'members'));
    }
    public function api()
    {
        $produks = Produk::all();

        return json_encode($produks);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id'             => ['required'],
            'kategori_id'    => ['required'],
            'merk'           => ['required'],
            'harga_beli'     => ['required'],
            'harga_jual'     => ['required'],
            'stok'           => ['required'],
        ]);

        Produk::create($request->all());

        return redirect('produks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $this->validate($request, [
            'id'             => ['required'],
            'kategori_id'    => ['required'],
            'merk'           => ['required'],
            'harga_beli'     => ['required'],
            'harga_jual'     => ['required'],
            'stok'           => ['required'],
        ]);

        Produk::create($request->all());

        return redirect('produks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
    }
}
