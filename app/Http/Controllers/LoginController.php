<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $try = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);
        if ($try) {
            return redirect()->to(RouteServiceProvider::HOME);
        }
        return back()->with('error', 'Credential Does Not Match');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
