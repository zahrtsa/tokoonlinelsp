@extends('layouts.app')

@include('utilities.navbar')

@section('content')
    <div class="container">
        <div class="card justify-content-center" >
            <div class="row ">
              <div class="col-lg-6">
                <img src="{{ asset('images/'.$product->image)}}" class="ps-5 rounded-start" style="display: block; max-width: 350px;" alt="picture" width="350">
              </div>
              <div class="col-lg-6 mt-4 mb-2">
                <div class="card-body">
                  <h5 class="card-title color-3" style="font-weight: 900">{{$product->namaproduct}}</h5>
                  <p class="card-text">{{$product->deskripsi}}</p>
                  <p class="card-text">Stock  : {{$product->qty}}</p>

                  @if(Auth::user()->level != 'admin')
                  {{-- form --}}
                  <form class="row g-3" action="{{ route('orderUser.store') }}" method="POST">
                    @csrf
                    @method("POST")
                     <input type="hidden" name="product_id" value="{{ $product->id }}"> 
                    <div class="col-auto">
                        <input type="text" readonly class="form-control-plaintext"  value="Pesan sebanyak :">
                    </div>
                    <div class="col-auto">
                      <label class="visually-hidden">Pesan Sebanyak : </label>
                      <input type="number"  name="jumlah_order"  class="form-control float-end qty-input text-center">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-3">Order</button>
                    </div>
                  </form>
                  @endif

                </div>
                    <div class="card-footer border-top-0">
                        <a href="{{url('/home')}}" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="gray" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg> Back</a>
                        {{-- <button type="submit" class="btn btn-primary float-end">Order</button> --}}
                    </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.increment-btn').click(function(e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val()
            var value = parseInt(inc_value, {{$product->qty}})
            value = isNaN(value) ? '0' : value;

            if(value < {{$product->qty}}){
                value++;
                $('.qty-input').val(value);
            }
        });
    });

    $(document).ready(function() {
        $('.decrement-btn').click(function(e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val()
            var value = parseInt(inc_value, 10)
            value = isNaN(value) ? '0' : value;

            if(value > 1){
                value--;
                $('.qty-input').val(value);
            }
        });
    });
</script>
@endsection
