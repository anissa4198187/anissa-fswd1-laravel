<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homepage = "BSTORE";
        $deskripsi = "10% OFF YOUR ORDER";
        $nama = [
            'ARMY BOMB',
            'PHOTO CARD',
            'ALBUM',
            'MERCHANDISE',
            'TUMBLR'
    ];


    return view ('tugaspert23.landing', compact('namaprdct', 'deskripsi' ));
    return view ('master.product', compact('nama' ));

        
    }

    public function index2()
    {

    $kategori = [
        'Alat elektronik',
        'Kendaraan',
        'Fashion',
        'Alat Tulis Kantor',
        'Kebutuhan Pokok'
    ];

    $produk = [
        'Army Bomb',
        'Album MOTS',
        'Album Proof',
        'Merchandise',
        'Tumblr',
        'Photo card'
    ];

    $pengguna = [
        'RM',
        'JIN',
        'YOONGI',
        'JHOPE',
        'JIMIN',
        'TAEHYUNG',
        'JUNGKOOK',
    ];
    
    
    
    return view('tugaske23.dashboard', compact('kategori', 'produk', 'pengguna'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}