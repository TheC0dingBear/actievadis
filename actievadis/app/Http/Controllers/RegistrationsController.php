<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrations;

class RegistrationsController extends Controller
{
    public function index()
    {
        $attributes = Registrations::orderBy('activity_id', 'ASC')
        ->join('activity', 'registrations.activity_id', '=', 'activity.id')
        // ->join('user', 'registrations.user_id', '=', 'user.id')
        ->select('registrations.id as registration_id', 'registrations.user_id as user_id', 'activity.name as activity_name', 'registrations.activity_id as activity_id', 'activity.description as activity_description')
        // ->select('registrations.id as registration_id', 'user.name as user_name')
        ->get();
        return $attributes;
    }

    public function store()
    {
        // Vullen van de registrations variabelen
        $attributes = request()->validate([
            'activity_id' => 'required',
            'user_id' => 'required',
        ]);

        Registrations::create($attributes)->save();

        // Terugsturen met succes bericht
        session()->flash('message', 'De inschrijving is goedgegaan, veel plezier!');
        return redirect('/');
    }
    public function resign($id) {
        $registration = Registrations::find($id);
        $registration->delete();

        session()->flash('message', 'De uitschrijving is goedgegaan');
        return redirect('/account');
    }
}
