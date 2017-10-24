<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.index', [
            'messages' => Message::all()
        ]);
    }

    public function new()
    {
        return view('messages.new');
    }

    public function create(Request $request)
    {
        // validate
        $data = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'description' => 'max:500',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,png|max:200'
        ]);

        // upload
        $filename = request()->file('image')->store('products');

        // save to db
        $data['image'] = $filename;
        Product::create($data);

        return back()->with('productCreationSuccessful', 'You have successfully created a product.');
    }
}
