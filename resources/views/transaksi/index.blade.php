@extends('layouts.app')

@include('utilities.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Trasanksi</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <thead>
                                    <th>#</th>
                                    <th>Kuantitas</th>
                                    <th>Harga Total</th>
                                    <th>Tools</th>
                                </thead>
                            </tr>

                            @foreach ($transaksi as $tr )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product->harga }}</td>
                                <td>{{ $item->jumlahorder }}</td>
                                <td>{{ $item->total }}</td>
                                <td>{{ $tr->status }}</td>
                                <td>
                                    <a href="{{ route('order.edit', $p->id) }}" class="btn btn-primary">Konfirmasi Transaksi</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
