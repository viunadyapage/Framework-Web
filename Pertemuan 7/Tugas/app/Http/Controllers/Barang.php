<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Barang extends Controller
{
    public function index($id)
    {
        return view('barang', ['isi_data' => $id]);
    }
}
