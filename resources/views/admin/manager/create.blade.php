@extends('admin.layouts.master')
@section('title', 'This create page')
@section('content')
    <!-- Data widget start -->
    <div class="col-md-12 col-xl-12">
        <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card project-task">
                <div class="card-header">
                    <div class="card-header-left ">
                        <h1>This is create page</h1>
                    </div>
                    <div class="card-header-right">
                        <a href="{{ route('admin.list') }}"><i class="ti-arrow-left"></i></a>
                    </div>
                </div>
                <div class="card-block p-b-10">
                    <div class="form-group row">
                        <label for=""></label>
                        <div class="col-sm-6">
                            <input type="text" name="productName" value="{{ old('productName') }}" class="form-control"
                                   placeholder="Product Name">
                        </div>
                        @error('productName.required')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col">
                            <select name="productVendor" class="form-control">
                                <option @if(old('productVendor') == '') disabled @endif>Select One Vendor</option>
                                <option value="Rolex">Rolex</option>
                                <option value="Patek Philippe">Patek Philippe</option>
                                <option value="Vertu">Vertu</option>
                                <option value="Richard Mille">Richard Mille</option>
                                <option value="Hublot">Hublot</option>
                                <option value="Franck Muller">Franck Muller</option>
                                <option value="Bovet">Bovet</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name="productPrice" value="{{ old('productPrice') }}" class="form-control"
                                   placeholder="Product Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="file" name="productImage" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea rows="5" cols="8" name="productDescription" class="form-control" placeholder="Product Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Data widget End -->
@endsection
