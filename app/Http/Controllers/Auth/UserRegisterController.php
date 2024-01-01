<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('client.welcome');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'registerEmail' => 'required|email|unique:users,email',
            'registerPassword' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $validator->validated();

        $user = User::create([
            'email' => $request->registerEmail,
            'password' => $request->registerPassword,
        ]);

        Auth::loginUsingId($user->user_id);

        if (!$user->settings()->exists()) {
            return redirect('/setup-account');
        }
        return redirect('/home');
    }
}
