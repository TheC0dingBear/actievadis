<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrations;

class RegistrationsController extends Controller
{
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
