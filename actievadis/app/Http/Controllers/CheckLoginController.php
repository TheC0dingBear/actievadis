<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        dd(auth('guard')->user()->name);
//        if () {
//            $data = Auth::user();
//            return Auth::user();
//            @dd('hoi');

        return $data;
//        }

    }
}
