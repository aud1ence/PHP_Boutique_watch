@extends('admin.layouts.master')
@section('title', 'This list page')
@section('content')
    <!-- Data widget start -->
    <div class="col-md-12 col-xl-12">
        <div class="card project-task">
            <div class="card-header">
                <div class="card-header-left ">
                    <h1>This is list products</h1>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-simple-left "></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block p-b-10">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Vendor</th>
                            <th>Product Price</th>
                            <th>Product Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>
                                    <div class="task-contain">
                                        <h6 class="bg-c-blue d-inline-block text-center">{{ $product->id }}</h6>
                                        <a href="{{ route('admin.show', $product->id) }}" class="d-inline-block m-l-20">{{ $product->productName }}</a>
                                    </div>
                                </td>
                                <td>
                                    <p class="d-inline-block m-r-20">{{ $product->productVendor }}</p>
                                </td>
                                <td>
                                    <p class="d-inline-block m-r-20">{{ $product->productPrice }}</p>
                                </td>
                                <td>
                                    <img src="{{ asset("storage/uploads/$product->productImage") }}" width="150px">
                                </td>
                            </tr>
                        @empty
                            <tr>Not data</tr>
                        @endforelse
                        {{--                    <tr>--}}
                        {{--                        <td>--}}
                        {{--                            <div class="task-contain">--}}
                        {{--                                <h6 class="bg-c-pink d-inline-block text-center">R</h6>--}}
                        {{--                                <p class="d-inline-block m-l-20">Redesign Android App</p>--}}
                        {{--                            </div>--}}
                        {{--                        </td>--}}
                        {{--                        <td>--}}
                        {{--                            <p class="d-inline-block m-r-20">4 : 36</p>--}}
                        {{--                            <div class="progress d-inline-block">--}}
                        {{--                                <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </td>--}}
                        {{--                    </tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Data widget End -->
@endsection
