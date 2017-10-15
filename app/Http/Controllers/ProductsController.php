<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index', [
            $products = Product::all()
        ]);
    }

    public function new()
    {
        return view('products.new');
    }

    public function create(Request $request)
    {
        //validate


        //upload
        $filename = request()->file('image')->store('products');
        //Save
        $data = $request->all();
        $data['image'] = $filename;
        Product::create($data);
        return back()->with('productCreationSuccessful', 'The product has been created successfully.');
    }
}
