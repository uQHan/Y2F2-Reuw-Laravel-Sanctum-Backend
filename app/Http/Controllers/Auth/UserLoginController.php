<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
            if ($request->expectsJson()) {
                return response()->json(['status' => 'yes']);
            } else {
                return view('client.home', compact('blogs'));
            }
        } else {
            if ($request->expectsJson()) {
                return response()->json(['status' => 'no']);
            } else {
                return view('client.welcome');
            }
        }
    }

    public function store(Request $request)
    {
        if (Auth::attempt(['email' => $request->loginEmail, 'password' => $request->loginPassword], $request->loginRemember)) {
            if (!$request->expectsJson()) {
                $request->session()->regenerate();
                Auth::user()->user_id;
                if (!User::find(Auth::user()->user_id)->settings()->exists())
                    return redirect('/setup-account');
                return redirect('/home');
            } else {
                $token = $request->user()->createToken('access_token');
                // error_log('Some message here.');
                // info('This is some useful information.');
                // $output = new \Symfony\Component\Console\Output\ConsoleOutput();
                // $output->writeln($token);
                // if (!User::find(Auth::user()->user_id)->settings()->exists())
                //     return response()->json($token, 200);
                return response()->json(['token' => $token->plainTextToken]);
            }
        } else {
            if ($request->expectsJson()) {
                return response('false');
            } else {
                return back()->withErrors([
                    'email' => 'Email or password is incorrect.',
                ]);
            }
        }
    }

    public function getUser(Request $request)
    {
        $id = Auth::user()->user_id;
        $user = User::find($id);
        $name = $user->name;
        $email = $user->email;
        $dob = $user->date_of_birth;
        $pfpUrl = $user->pfp_url;
        $bio = $user->bio;
        $website = $user->website;

        if ($request->expectsJson()) {
            return response()->json(compact('id', 'name', 'email', 'dob', 'pfpUrl', 'bio', 'website'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->bearerToken();
        if ($request->expectsJson()) {
            return response();
        } else {
            return redirect('/welcome');
        }
    }
}
