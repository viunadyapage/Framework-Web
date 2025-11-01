<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manage.users.edit_user');
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
    public function show(string $angka)
    {
        if ($angka % 2 == 0) {
            $alertType = 'success';
            $pesan = "Nilai ini adalah genap";
        } else {
            $alertType = 'warning';
            $pesan = "Nilai ini adalah ganjil";
        }

        // Kirim ke view blade
        return view('produk', [
            'angka' => $angka,
            'pesan' => $pesan,
            'alertType' => $alertType
        ]);
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
