<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orderitem = Order::where('user_id', '=', Auth::user()->id)->get();
        return view('order.user', compact('orderitem') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $product = Product::find($request->input('product_id'));
        $recentQty = $product->qty - $request->input('jumlah_order');
        $harga = $product->harga;

        if ($recentQty < 0) {
            return redirect()->back()->with('error', 'Maaf Stok tidak mencukupi');
        }
        $product->qty = $recentQty;
        $product->update();

        $order = new Order();
        $order->product_id = $request->input('product_id');
        $order->user_id = Auth::user()->id;
        $order->jumlah_order = $request->input('jumlah_order');
        $order->harga = $harga;
        $order->total = $harga * $request->jumlah_order;

        $order->save();
        return redirect('/orderUser');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Order::destroy($id);
        return redirect()->route('order.user')->with('info','Pesanan dihilangkan');
    }
}
