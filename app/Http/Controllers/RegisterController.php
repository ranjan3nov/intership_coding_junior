<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "password" => "required|confirmed|string|min:8",
        ]);
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        Auth::login($user);

        return redirect()->to(RouteServiceProvider::HOME);
    }
}
