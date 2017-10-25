<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

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

    public function create(MessageRequest $request)
    {
        Message::create($request->validated());
        return back()->with('successfulCreate', 'Successful create operation.');
    }

    public function edit( $id )
    {
        return view('messages.edit', [
            'message'=> Message::find($id)
        ]);
    }

    public function update(MessageRequest $request, $id)
    {
        Message::find($id)->update($request->validated());
        return redirect()->route('message.index')->with('successfulUpdate', 'Successful update operation');
    }
}
