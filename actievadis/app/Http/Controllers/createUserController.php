<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class createUserController extends Controller
{
    public function index()
    {
        return view('signUp');
    }

    public function store()
    {
        // Vullen van de user variabelen
        $attributes = request()->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        // hash de password met een laravel function bcrypt
        $attributes['password'] = bcrypt($attributes['password']);

        // Maak een user met de opgehaalde variabelen en log die in via laravel authorization
        auth()->login(User::create($attributes));

        // Terugsturen met succes bericht
        session()->flash('message', 'Your account has been created.');
//        return redirect('/')->with('success', 'Your account has been created.');
        return redirect('/');
    }
}
