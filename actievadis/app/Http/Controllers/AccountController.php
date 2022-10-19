<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Registrations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function accountInfo(Request $request)
    {
//        $registrations = DB::table('registrations');


        return view('account');
    }
}
