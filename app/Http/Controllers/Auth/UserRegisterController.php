<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequests;
use App\Models\User;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('client.welcome');
    }

    public function store(RegisterUserRequests $request)
    {
        $validated = $request->validated();
        User::create($validated);
        return redirect('login');
    }
}
