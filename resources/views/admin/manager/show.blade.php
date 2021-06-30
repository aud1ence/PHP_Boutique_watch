@extends('admin.layouts.master')
@section('title', 'This is detail product')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Price</h5>
                       <h2>{{ $product->productPrice }} &euro;</h2>
                        <div class="card-header-right">
                            <a href="{{ route('admin.list') }}"><i class="ti-arrow-left"></i></a>
                            <a href="{{ route('admin.edit', $product->id) }}"><i class="ti-marker-alt"></i></a>
                            <a href="{{ route('admin.delete', $product->id) }}" onclick="return confirm('Are you sure?')"><i class="ti-trash"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="card-title">
                            <h4>{{ $product->productName }}</h4>
                        </div>
                        <div class="card-img" style="alignment: center">
                            <img src="{{ asset("storage/uploads/$product->productImage") }}" style="margin-left: 30%" alt="">
                        </div>
                        <div class="card-body">
                            <label for="card-body">Description:</label>
                            <p>{{ $product->productDescription }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
