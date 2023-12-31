<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.home');
    }

    public function store(Request $request){
        $request->validate([
            'postTitle' => 'required',
            'postText' => 'nullable',
            'postImage' => 'image|max:2048|nullable'
        ]);
        Blog::create([
            "title" => $request['postTitle'],
            "text" => $request['postText'] ?? null,
            "user_id" => auth()->id(),
            "img"=>$this->uploadImage($request)
        ]);
    }
}
