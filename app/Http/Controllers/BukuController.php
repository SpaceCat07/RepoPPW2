<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBuku = Buku::all();
        $res = 0;
        $total = 0;

        foreach ($dataBuku as $buku ) {
            $total += $buku -> harga;
            $res++;
        }

        return view('index', compact('dataBuku', 'res', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku = new Buku();
        $buku -> judul = $request-> judul;
        $buku -> penulis = $request-> penulis;
        $buku -> harga = $request-> harga;
        $buku -> tgl_terbit = $request-> tgl_terbit;
        $buku -> save();

        return redirect('/buku');
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
        $buku = Buku::find($id);
        return view('edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date'
        ]);


        $buku = Buku::find($id);
        $buku ->judul = $request -> judul;
        $buku ->penulis = $request -> penulis;
        $buku ->harga = $request -> harga;
        $buku ->tgl_terbit = $request -> tgl_terbit;
        $buku -> save();

        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return redirect('/buku');
    }
}
