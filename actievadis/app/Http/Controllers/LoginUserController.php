<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $email = request('email');
        $postPassword = request('password');
        $user = User::all()->where('email', $email)->first();
        $userExits = isset($user);

        if ($userExits) {
            $passwordMatches = Hash::check($postPassword, $user->password);

            if ($passwordMatches == true) {
                Auth::login($user, true);
                return redirect('/')->with('message', 'Je bent ingelogd');
            } else {
                return view('login')->with('message', 'Het wachtwoord klopt niet');
            }
        } else {
            return view('login')->with('message', 'Er bestaat geen gebruiker met deze email');
        }
    }

    public function signout()
    {
        if (Auth::check()) {
            Auth::logout();
            Session::flush();
        } else {
            return redirect('login');
        }
        return redirect('login');
    }
}
