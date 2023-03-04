<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->level == 'admin') {
            $product = Product::all();
            return view('product.index', compact('product'));
        } else {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        //$image_path = $request->file('image')->store('image', 'public');

        $product = new Product;
        $product->namaproduct = $request->namaproduct;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->qty = $request->qty;
        $product->image = $imageName;
        // dd($category);
        if ($product->save()) {
            return redirect()->route('product.index')->with('success','DATA BERHASILL CUY');
        } else{
            return redirect()->back()->with('error','KAGAK BISA CUY');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->namaproduct = $request->namaproduct;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->qty = $request->qty;
        $product->save();
        return redirect()->route('product.index')->with('success','DATA  BISA GANTI CUY');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        //$product = Product::where('id', $id)->delete();
        return redirect()->route('product.index');
    }
}
