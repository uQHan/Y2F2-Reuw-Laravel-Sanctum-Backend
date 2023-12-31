<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index()
    {
        if (Auth::check())
            return view('client.home');
        else
            return view('client.welcome');
    }

    public function store(Request $request)
    {
        if (Auth::attempt(['email' => $request->loginEmail, 'password' => $request->loginPassword], $request->loginRemember)) {
            $request->session()->regenerate();
            Auth::user()->user_id;
            if (!User::find(Auth::user()->user_id)->settings()->exists()) {
                return redirect('/setup-account');
            }
            return redirect('/home');
        } else {
            return back()->withErrors([
                'email' => 'Email or password is incorrect.',
            ]);
        }
    }

    // public function forget() {
    //     return view('client.forget');
    // }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/welcome');
    }
}
