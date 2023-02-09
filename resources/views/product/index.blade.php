@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"> 
                        <a href="{{route('product.create')}}" class="btn btn-primary float-end" >Add New Printer</a> 
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <thead>
                                    <th>#</th>
                                    <th>Printer Name</th>
                                    <th>Price of</th>
                                    <th>Quantity</th>
                                    <th>Tools</th>
                                </thead>
                            </tr>

                            <tbody>
                                @foreach ($product as $p )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->namaproduct }}</td>
                                        <td>{{ $p->harga }}</td>
                                        <td>{{ $p->qty }}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('product.destroy', $p->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection