@extends('layouts.app')

@include('utilities.navbarpro')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom-0"><h4 class="justify-content-center">Tambahkan Printer Baru!</h4></div>
                <div class="card-body">
                   <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="" class="">Printer Name : </label>
                        <input type="text" name="namaproduct" class="form-control mt-1 mb-1">
                    </div>
                    <div class="form-group">
                        <label for="" class=""> Deskripsi : </label>
                        <input type="text" name="deskripsi" class="form-control mt-1 mb-1">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Choose Image : </label>
                        <input type="file" name="image" class="form-control mt-1 mb-1">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Price Of : </label>
                        <input type="text" name="harga" class="form-control mt-1 mb-1">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Quantity : </label>
                        <input type="text" name="qty" class="form-control mt-1 mb-1">
                    </div>
                    <div class="card-footer border-top-0">
                        <a href="{{route('product.index')}}" class="btn Tombol"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="gray" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg> Back</a>
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
   </div>

@endsection