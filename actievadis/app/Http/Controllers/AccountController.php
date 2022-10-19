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
        $registrations = DB::table('registrations')
            ->join('activity', 'registrations.activity_id', '=', 'activity.id')
            ->select('registrations.id as registration_id', 'activity.name as activity_name', 'registrations.activity_id as activity_id', 'activity.description as activity_description')
            ->where('registrations.user_id', '=', Auth::user()->id)
            ->get();

        return view('account')->with('registrations', $registrations);
    }
}
