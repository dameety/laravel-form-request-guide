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
        if ( Product::all()->count()  > 4 ) {
            
            return back()->with('maxProduct', 'Product creation unsuccessful. Maximum product limit reached.');
        
        }
        
        // validate
        $data = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'description' => 'max:300',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,png|max:200'
        ]);
               
        
        // upload
        $filename = request()->file('image')->store('products');
        
        
        $data['image'] = $filename;
        Product::create($data);
        
        return back()->with('productCreationSuccessful', 'You have successfully created a product.');
    }
}
