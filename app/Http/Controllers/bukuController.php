<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Buku;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBuku = Buku::all() -> sortByDesc('judul');

        $res = 0;
        $total = 0;
        $urut = 1;

        foreach ($dataBuku as $buku) {
            $buku -> tgl_terbit = Carbon::createFromFormat('Y-m-d', $buku -> tgl_terbit);
            $res++;
            $total += $buku -> harga;
        }

        return view('bukuIndex', compact('dataBuku', 'res', 'total', 'urut'));

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
