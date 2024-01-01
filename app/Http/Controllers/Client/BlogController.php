<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Bookmark;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        return view('client.home', compact('blogs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'postTitle' => 'required',
            'postText' => 'nullable',
            'postImage' => 'image|max:2048|nullable'
        ]);

        if ($request->hasFile('postImage')) {
            $get_file_image = $request->file('postImage');
            $get_image_name = $get_file_image->getClientOriginalName();
            $get_image_extension = $get_file_image->getClientOriginalExtension();
            $image_name = current(explode('.', $get_image_name));
            $imagePath = time() . "-" . $image_name . "." . $get_image_extension;
            $get_file_image->move('./client/image/', $imagePath);
        } else {
            $imagePath = null;
        }

        Blog::create([
            "user_id" => auth()->user()->user_id,
            "title" => $request->postTitle,
            "content" => $request->postText,
            "image_url" => $imagePath,
        ]);

        return back();
    }

    public function like($blog_id)
    {
        $user = User::find(auth()->user()->user_id);
        $hasLike = $user->likes()->where('likes.blog_id', $blog_id)->exists();
        if (!$hasLike){
            $user->likes()->attach($blog_id);
        } else {
            $user->likes()->detach($blog_id);
        }
        return back();
    }

    public function bookmark($blog_id)
    {
        $user = User::find(auth()->user()->user_id);
        $hasBookmark = $user->bookmarks()->where('bookmarks.blog_id', $blog_id)->exists();
        if (!$hasBookmark){
            $user->bookmarks()->attach($blog_id);
        } else {
            $user->bookmarks()->detach($blog_id);
        }
        return back();
    }

    public function bookmarkList()
    {
        $blogs = User::find(auth()->user()->user_id)->bookmarks()->orderBy('bookmarks.created_at', 'desc')->paginate(10);
        return view('client.bookmark', compact('blogs'));
    }
}
