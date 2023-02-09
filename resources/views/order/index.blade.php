@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                t5esd
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row justify-content-start">

            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4>My Cart</h4>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
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


                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8 text-center mt-2">
                                <h5 class="card-title ">Subtotal</h5>
                            </div>
                            <div class="col-3 ms-auto">
                                <a href="{{ route('product.create') }}" class="btn btn-warning float-end ">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
