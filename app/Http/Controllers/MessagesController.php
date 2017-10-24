<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.index', [
            'messages' => Message::latest('created_at')->get()
        ]);
    }

    public function new()
    {
        return view('messages.new');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:50',
            'category' => 'required',
            'subject' => 'required|max:100',
            'message' => 'required|max:500'
        ]);

        Message::create($data);

        return back()->with('successfulCreate', 'Successful create operation.');
    }

    public function edit( $id )
    {
        return view('messages.edit', [
            'message'=> Message::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'email' => 'required|email|max:50',
            'subject' => 'required|max:100',
            'message' => 'required|max:500'
        ]);

        Message::find($id)->update($data);
        return redirect()->route('message.index');
    }
}
