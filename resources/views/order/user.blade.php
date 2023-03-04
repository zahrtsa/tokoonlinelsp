@extends('layouts.app')

@include('utilities.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My Cart</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <thead>
                                    <th>#</th>
                                    <th>Printer Name</th>
                                    <th>Price of</th>
                                    <th>Quantity</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Tools</th>
                                </thead>
                            </tr>

                            @foreach ($orderitem as $item )
                            <tr>
                                @if ($item->id = 'empty')
                                    <td><span>Silahkan Pilih Produk!!</span></td>
                                @endif
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->orderitem->namaproduct }}</td>
                                <td>{{ $item->orderitem->harga }}</td>
                                <td>{{ $item->jumlahorder }}</td>
                                <td>{{ $item->total }}</td>
                                <td>
                                    <a href="{{ route('order.destroy', $item->id) }}" class="btn btn-danger">Remove</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8 text-center mt-2">
                                <h5 class="card-title ">Subtotal </h5>
                            </div>
                            <div class="col-3 ms-auto">
                                <a href="{{ route('transaksi.store') }}" class="btn btn-warning float-end ">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
