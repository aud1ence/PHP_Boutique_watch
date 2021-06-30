<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::withTrashed()->get();
        return view('admin.manager.list', compact('products'));
    }

    public function create()
    {
        return view('admin.manager.create');
    }

    public function store(CreateProductRequest $request)
    {
//        dd($request->productName);
        $product = new Product();
        $product->fill($request->all());

        $file = $request->productImage;

        if (!$request->hasFile('productImage')) {
            $product->productImage = $file;
            if (!$request->file('productImage')->getSize()) {
                $message = "Please choose different image";
                Session::flash('image_false', $message);
                return redirect()->route('admin.create');
            }
        } else {
            // Lay phan mo rong cua ten anh
            $fileExtension = $file->getClientOriginalExtension();
//            dd($fileExtension);
            // Convert ten anh
            $fileName = date('Y-m-d_h:i:s') . "_" . ".$fileExtension";
            // Luu anh vao folder uploads
            $request->file('productImage')->storeAs('public/uploads', $fileName);
            //Chay lenh storage:link de connect storage->public
            // Truyen vao Task
            $product->productImage = $fileName;
        }
        $product->save();

        $message = "Add product $request->productName success";
        Session::flash('create_success', $message);
        return redirect()->route('admin.list');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.manager.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findorfail($id);
        return view('admin.manager.edit', compact('product'));
    }

    public function update(CreateProductRequest $request, $id)
    {

    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('admin.list');
    }

}
