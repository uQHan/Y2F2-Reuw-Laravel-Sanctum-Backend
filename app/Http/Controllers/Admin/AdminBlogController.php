<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function remove($blog_id){
        $rmv = Blog::find($blog_id);
        $rmv->deleted = true;
        $rmv->save();
        return back();
    }
}
