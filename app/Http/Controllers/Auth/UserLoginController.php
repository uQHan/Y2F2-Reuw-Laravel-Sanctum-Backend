<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('client.welcome');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
            return redirect('/');
        } else {
            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu không đúng.',
            ]);
        }
    }

    // public function forget() {
    //     return view('client.forget');
    // }

    public function logout() {
        Auth::logout();
        session()->flush();
        return redirect('client.welcome');
    }
}
