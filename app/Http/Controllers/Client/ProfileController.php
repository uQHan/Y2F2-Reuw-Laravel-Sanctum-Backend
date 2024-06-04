<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request){
        $user = User::find(Auth::user()->user_id);
        $blogs = User::find(Auth::user()->user_id)->blogs()->paginate(10);
        if ($request->expectsJson()){
            return response()->json(compact('user','blogs'));
        } else {
            return view('client.profile', compact('user','blogs'));
        }
    }
    public function other(Request $request){
        $user_id = $request->user_id;
        $user = User::find($user_id);
        $blogs = User::find($user_id)->blogs()->paginate(10);
        if ($request->expectsJson()){
            return response()->json(compact('user','blogs'));
        } else {
            return view('client.profile', compact('user','blogs'));
        }
    }
    public function settings(){
        return view('client.settings');
    }
}
