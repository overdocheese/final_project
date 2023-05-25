<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Galleries;
use DB;

class Product_GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product_galleries = Product_Galleries::join('product', 'product_galleries.product_id', '=', 'product.id')
        ->select('product_galleries.*', 'product.nama as product')
        ->get();
        return view('admin.product_galleries.index', compact('product_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $product = DB::table('product')->get();
        $product_galleries = Product_Galleries::join('product', 'product_galleries.product_id', '=', 'product.id')
        ->select('product_galleries.*', 'product.nama as product')
        ->get();
        return view('admin.product_galleries.create', compact('product_galleries', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(!empty($request->foto)){
            $fileName = 'foto-'.$request->id.'.'.$request->foto->extension();
            $request->foto->move(public_path('admin/image'), $fileName);
        }
        else {
            $fileName = '';
        }
        DB::table('product_galleries')->insert([
            'foto' => $fileName,
            'product_id' => $request->product_id,
        ]);
        return redirect('admin/product_galleries');
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
