<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            "title" => "Registrasi"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'unique:users', 'max:50'],
            'email'  => ['required', 'email:dns', 'unique:users', 'max:50'],
            'password'  => ['required', 'min:8', 'max:30']
        ]);

        // dd('Registrasi berhasil');
        
        User::create($validatedData);
        return view('login', [
            "title" => "Login"
        ]);
    }
}
