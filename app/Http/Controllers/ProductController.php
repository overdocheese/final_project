<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //arahkan ke view
        $product = Product::join('penjual', 'product.penjual_id', '=', 'penjual.id')
        ->select('product.*', 'penjual.nama_toko as nama_toko')
        ->get();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke file create
        $penjual = DB::table('penjual')->get();
        $product = Product::join('penjual', 'product.penjual_id', '=', 'penjual.id')
        ->select('product.*', 'penjual.nama as penjual')
        ->get();
        return view('admin.product.create', compact('product', 'penjual'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('product')->insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'price' => $request->price,
            'stok' => $request->stok,
            'penjual_id' => $request->penjual_id,
        ]);
        return redirect('admin/product');
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
