<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    public function index()
    {
        $participation = Activity::orderBy('activity_id', 'DESC')->get();
        return $participation;
    }

    public function store(Request $request)
    {
        $participant = new Participation([
            'activity_id'  => $request->input('activity_id'),
            'user_id' => $request->input('user_id'),

        ]);
        $activity->save();
        return response()->json('Activity created!');
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        return response()->json($activity);
    }

    public function update($id, Request $request)
    {
        $activity = Activity::find($id);
        $activity->update($request->all());
        return response()->json('Activity updated!');
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return response()->json('Activity deleted');
    }
}
