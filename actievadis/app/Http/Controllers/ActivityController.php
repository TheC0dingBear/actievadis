<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('updated_at', 'DESC')->get();
        return $activities;
    }

    public function store(Request $request)
    {
        $activity = new Activity([
            'name'  => $request->input('name'),
            'location' => $request->input('location'),
            'description' => $request->input('description'),
            'datum' => $request->input('datum'),
            'startTime' => $request->input('startTime'),
            'endTime' => $request->input('endTime'),
            'cost' => $request->input('cost'),
            'food' => $request->input('food'),
            'maxPeople' => $request->input('maxPeople'),
            'imageUrl' => $request->input('imageUrl'),
            'created_at' => $request->input('created_at'),
            'updated_at' => $request->input('updated_at')
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
