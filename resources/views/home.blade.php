@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (Auth::user()->level == 'admin')
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                            @foreach ($product as $item)
                                {{ $item->namaproduct }}
                            @endforeach
                        </div>
                    </div>
                    <div class="card-group">
                        @foreach ($product as $item)
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    {{ $item->namaproduct }}
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-primary">Beli</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="col-md-8">
                    <div class="card-group">
                        @foreach ($product as $item)
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    {{ $item->namaproduct }}
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-primary">Beli</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
