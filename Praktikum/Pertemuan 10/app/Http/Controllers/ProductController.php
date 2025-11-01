<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = Product::all();
        return view('master-data.product-master.index-product', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master-data.product-master.create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input data
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        Product::create($validasi_data);
        return redirect()->route('product-index')->with('success', 'Product created successfully.'); //saya ubah dari product-create jadi product-index agar setelah menambahkan data langsung bisa melihat tabel
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('master-data.product-master.edit-product', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);
        $product = Product::findOrFail($id);
        $product->update($validasi_data);
        return redirect()->route('product-index')->with('success', 'Product updated successfully.');
    }

    public function destroy(string $id)
    {
        //$product = Product::findOrFail($id);
        //$product->delete();
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('product-index')->with('success', 'Product deleted successfully.');
    }
    public function exportExcel()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}