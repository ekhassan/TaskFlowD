<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('pages.dashboard')->with('success', 'Signed in');
        }
        return redirect('login')->withSuccess('Login details are not valid');
    }
    public function reg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']); // Hash the password

        $check = $this->create($data);

        return redirect('login')->withSuccess('Successfully registered');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('pages/dashboard');
        }
        return redirect('/')->withSuccess('You are not allowed to access');
    }
    public function signout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

}