<?php
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function new()
    {
        return view('products.new');
    }

    public function create(Request $request)
    {

        // authorize
        if ( Product::all()->count() === config('shop.maxproductlimit') ) {
            return back()->with('maxProducts', 'Product creation unsuccessful. Maximum product limit reached.');
        }
        
        
        // validate
//         $request->validate([
//             'name' => 'required|min:255',
//             'price' => 'required|numeric'
//         ]);
        
        
        // upload
        $filename = request()->file('image')->store('products');
        // dd($filename);
        // Save
        $data = $request->all();
        $data['image'] = $filename;
        Product::create($data);
        return back()->with('productCreationSuccessful', 'You have successfully created a product.');
    }
}
