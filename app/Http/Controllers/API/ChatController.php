<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Chat;
use App\Http\Resources\ChatResource;

class ChatController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Chat::orderBy('created_at', 'asc')->get();

        return ChatResource::collection($query);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'nullable',
            'body' => 'required',
        ]);

        $chat = Chat::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'body' => $request->body,
        ]);

        return new ChatResource($chat);
    }
}
