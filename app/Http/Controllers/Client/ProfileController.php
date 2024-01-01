<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->user_id);
        $blogs = User::find(Auth::user()->user_id)->blogs()->paginate(10);
        return view('client.profile', compact('user','blogs'));
    }
    public function orthers($user_id){
        $user = User::find($user_id);
        $blogs = User::find($user_id)->blogs()->paginate(10);
        return view('client.profile', compact('blogs'));
    }
    public function settings(){
        return view('client.settings');
    }
}
